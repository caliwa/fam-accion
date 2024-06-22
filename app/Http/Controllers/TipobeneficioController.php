<?php

namespace App\Http\Controllers;

use App\Models\Tipobeneficio;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

use App\Http\Requests\TipobeneficioRequest;

/**
 * Class TipobeneficioController
 * @package App\Http\Controllers
 */

class TipobeneficioController extends Controller
{
    public function index()
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipobeneficio");

            if ($response->successful()) {
                $response = $response->json();
                $tipobeneficios = $response['tipobeneficios'];
                $tipobeneficios = Tipobeneficio::orderBy('updated_at', 'desc')->paginate();
                
                return view('tipobeneficio.index', compact('tipobeneficios'))
                    ->with('i', (request()->input('page', 1) - 1) * $tipobeneficios->perPage());
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipobeneficio/create");

            if ($response->successful()) {
                $response = $response->json();
                $tipobeneficio = $response['tipobeneficio'];

                return view('tipobeneficio.create', compact('tipobeneficio'));
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

    public function store(TipobeneficioRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/tipobeneficio", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipobeneficio.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El tipo de beneficio con IdTipoBeneficio ' . $request['IdTipoBeneficio'] . ' ya se encuentra registrado en Familias en Acción';
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipobeneficio/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $tipobeneficio = new Tipobeneficio();
                $tipobeneficio->fill($response['tipobeneficio']);
                return view('tipobeneficio.show', compact('tipobeneficio'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipobeneficio/{$id}/edit");
            if ($response->successful()) {
                $response = $response->json();
                $tipobeneficio = json_decode(json_encode($response['tipobeneficio']), false);
                return view('tipobeneficio.edit', compact('tipobeneficio'));
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

    public function update(TipobeneficioRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/tipobeneficio/{$request->validated()['IdTipoBeneficio']}", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipobeneficio.index')
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/tipobeneficio/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipobeneficio.index')
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