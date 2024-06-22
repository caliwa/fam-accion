<?php

namespace App\Http\Controllers;

use App\Models\Rangobeneficioconsolidadoasignado;
use App\Http\Requests\RangobeneficioconsolidadoasignadoRequest;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

/**
 * Class RangobeneficioconsolidadoasignadoController
 * @package App\Http\Controllers
 */
class RangobeneficioconsolidadoasignadoController extends Controller
{
    public function index()
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/rangobeneficioconsolidadoasignado");

            if ($response->successful()) {
                $response = $response->json();
                $rangobeneficioconsolidadoasignados = $response['rangobeneficioconsolidadoasignados'];
                $rangobeneficioconsolidadoasignados = Rangobeneficioconsolidadoasignado::orderBy('updated_at', 'desc')->paginate();
                
                return view('rangobeneficioconsolidadoasignado.index', compact('rangobeneficioconsolidadoasignados'))
                    ->with('i', (request()->input('page', 1) - 1) * $rangobeneficioconsolidadoasignados->perPage());
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/rangobeneficioconsolidadoasignado/create");

            if ($response->successful()) {
                $response = $response->json();
                $rangobeneficioconsolidadoasignado = $response['rangobeneficioconsolidadoasignado'];

                return view('rangobeneficioconsolidadoasignado.create', compact('rangobeneficioconsolidadoasignado'));
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

    public function store(RangobeneficioconsolidadoasignadoRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/rangobeneficioconsolidadoasignado", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('rangobeneficioconsolidadoasignado.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El rango de beneficio consolidado asignado con IdRangoBeneficioConsolidadoAsignado ' . $request['IdRangoBeneficioConsolidadoAsignado'] . ' ya se encuentra registrado en Familias en Acción';
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/rangobeneficioconsolidadoasignado/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $rangobeneficioconsolidadoasignado = new Rangobeneficioconsolidadoasignado();
                $rangobeneficioconsolidadoasignado->fill($response['rangobeneficioconsolidadoasignado']);
                return view('rangobeneficioconsolidadoasignado.show', compact('rangobeneficioconsolidadoasignado'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/rangobeneficioconsolidadoasignado/{$id}/edit");
            if ($response->successful()) {
                $response = $response->json();
                $rangobeneficioconsolidadoasignado = json_decode(json_encode($response['rangobeneficioconsolidadoasignado']), false);
                return view('rangobeneficioconsolidadoasignado.edit', compact('rangobeneficioconsolidadoasignado'));
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

    public function update(RangobeneficioconsolidadoasignadoRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/rangobeneficioconsolidadoasignado/{$request->validated()['IdRangoBeneficioConsolidadoAsignado']}", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('rangobeneficioconsolidadoasignado.index')
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/rangobeneficioconsolidadoasignado/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('rangobeneficioconsolidadoasignado.index')
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