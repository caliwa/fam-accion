<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Exception\RequestException;
use App\Models\Tipopoblacion;
use App\Http\Requests\TipopoblacionRequest;

/**
 * Class TipopoblacionController
 * @package App\Http\Controllers
 */
class TipopoblacionController extends Controller
{
    public function index()
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipopoblacion");

            if ($response->successful()) {
                $response = $response->json();
                $tipopoblacions = $response['tipopoblacions'];
                $tipopoblacions = Tipopoblacion::orderBy('updated_at', 'desc')->paginate();
                
                return view('tipopoblacion.index', compact('tipopoblacions'))
                    ->with('i', (request()->input('page', 1) - 1) * $tipopoblacions->perPage());
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipopoblacion/create");

            if ($response->successful()) {
                $response = $response->json();
                $tipopoblacion = $response['tipopoblacion'];

                return view('tipopoblacion.create', compact('tipopoblacion'));
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

    public function store(TipopoblacionRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/tipopoblacion", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipopoblacion.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El tipo de población con IdTipoPoblacion ' . $request['IdTipoPoblacion'] . ' ya se encuentra registrado en Familias en Acción';
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipopoblacion/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $tipopoblacion = new Tipopoblacion();
                $tipopoblacion->fill($response['tipopoblacion']);
                return view('tipopoblacion.show', compact('tipopoblacion'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipopoblacion/{$id}/edit");
            if ($response->successful()) {
                $response = $response->json();
                $tipopoblacion = json_decode(json_encode($response['tipopoblacion']), false);
                return view('tipopoblacion.edit', compact('tipopoblacion'));
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

    public function update(TipopoblacionRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/tipopoblacion/{$request->validated()['IdTipoPoblacion']}", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipopoblacion.index')
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/tipopoblacion/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipopoblacion.index')
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