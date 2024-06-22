<?php

namespace App\Http\Controllers;

use App\Models\Nivelescolaridad;
use App\Http\Requests\NivelescolaridadRequest;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

/**
 * Class NivelescolaridadController
 * @package App\Http\Controllers
 */
// class NivelescolaridadController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $nivelescolaridades = Nivelescolaridad::paginate();

//         return view('nivelescolaridad.index', compact('nivelescolaridades'))
//             ->with('i', (request()->input('page', 1) - 1) * $nivelescolaridades->perPage());
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         $nivelescolaridad = new Nivelescolaridad();
//         return view('nivelescolaridad.create', compact('nivelescolaridad'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(NivelescolaridadRequest $request)
//     {
//         Nivelescolaridad::create($request->validated());

//         return response()->redirectToRoute('nivelescolaridad.index')
//             ->with('success', 'Nivel de escolaridad creado con éxito.');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show($id)
//     {
//         $nivelescolaridad = Nivelescolaridad::find($id);

//         return view('nivelescolaridad.show', compact('nivelescolaridad'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit($id)
//     {
//         $nivelescolaridad = Nivelescolaridad::find($id);

//         return view('nivelescolaridad.edit', compact('nivelescolaridad'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(NivelescolaridadRequest $request, Nivelescolaridad $nivelescolaridad)
//     {
//         $nivelescolaridad->update($request->validated());

//         return response()->redirectToRoute('nivelescolaridad.index')
//             ->with('success', 'Nivel de escolaridad modificado con éxito.');
//     }

//     public function destroy($id)
//     {
//         Nivelescolaridad::find($id)->delete();

//         return response()->redirectToRoute('nivelescolaridad.index')
//             ->with('success', 'Nivel de escolaridad eliminado con éxito.');
//     }
// }

class NivelescolaridadController extends Controller
{
    public function index()
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/nivelescolaridad");

            if ($response->successful()) {
                $response = $response->json();
                $nivelescolaridades = $response['nivelescolaridades'];
                $nivelescolaridades = Nivelescolaridad::orderBy('updated_at', 'desc')->paginate();
                
                return view('nivelescolaridad.index', compact('nivelescolaridades'))
                    ->with('i', (request()->input('page', 1) - 1) * $nivelescolaridades->perPage());
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function create()
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/nivelescolaridad/create");

            if ($response->successful()) {
                $response = $response->json();
                $nivelescolaridad = $response['nivelescolaridad'];

                return view('nivelescolaridad.create', compact('nivelescolaridad'));
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function store(NivelescolaridadRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/nivelescolaridad", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('nivelescolaridad.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El nivel de escolaridad con IdNivelEscolaridad ' . $request['IdNivelEscolaridad'] . ' ya se encuentra registrado en Familias en Acción';
                }
                return back()->with('error', $errorMessage);
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function show($id)
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/nivelescolaridad/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $nivelescolaridad = new Nivelescolaridad();
                $nivelescolaridad->fill($response['nivelescolaridad']);
                return view('nivelescolaridad.show', compact('nivelescolaridad'));
            } else {
                return back()->with('success', $response->json('error'));
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function edit($id)
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/nivelescolaridad/{$id}/edit");
            if ($response->successful()) {
                $response = $response->json();
                $nivelescolaridad = json_decode(json_encode($response['nivelescolaridad']), false);
                return view('nivelescolaridad.edit', compact('nivelescolaridad'));
            } else {
                return back()->with('success', $response->json('error'));
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function update(NivelescolaridadRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/nivelescolaridad/{$request->validated()['IdNivelEscolaridad']}", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('nivelescolaridad.index')
                    ->with('success', $message);
            } else {
                return back()->with('success', $response->json('error'));
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function destroy($id)
    {
        try {
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/nivelescolaridad/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('nivelescolaridad.index')
                    ->with('success', $message);
            } else {
                return back()->with('success', $response->json('error'));
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:' . $statusCode . ' - ' . $errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }
}