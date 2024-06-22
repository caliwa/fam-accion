<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Exception\RequestException;
use App\Models\Tipodocumento;
use App\Http\Requests\TipodocumentoRequest;

/**
 * Class TipopoblacionController
 * @package App\Http\Controllers
 */
class TipodocumentoController extends Controller
{
    public function index()
    {
        try {
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipodocumento");

            if ($response->successful()) {
                $response = $response->json();
                $tipodocumentos = $response['tipodocumentos'];
                $tipodocumentos = Tipodocumento::orderBy('updated_at', 'desc')->paginate();
                
                return view('tipodocumento.index', compact('tipodocumentos'))
                    ->with('i', (request()->input('page', 1) - 1) * $tipodocumentos->perPage());
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipodocumento/create");

            if ($response->successful()) {
                $response = $response->json();
                $tipodocumento = $response['tipodocumento'];

                return view('tipodocumento.create', compact('tipodocumento'));
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

    public function store(TipodocumentoRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/tipodocumento", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipodocumento.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El tipo de documento con IdTipoDocumento ' . $request['IdTipoDocumento'] . ' ya se encuentra registrado en Familias en Acción';
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipodocumento/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $tipodocumento = new Tipodocumento();
                $tipodocumento->fill($response['tipodocumento']);
                return view('tipodocumento.show', compact('tipodocumento'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/tipodocumento/{$id}/edit");
            if ($response->successful()) {
                $response = $response->json();
                $tipodocumento = json_decode(json_encode($response['tipodocumento']), false);
                return view('tipodocumento.edit', compact('tipodocumento'));
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

    public function update(TipodocumentoRequest $request)
    {
        try {
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/tipodocumento/{$request->validated()['IdTipoDocumento']}", $request->validated());

            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipodocumento.index')
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/tipodocumento/{$id}");
            if ($response->successful()) {
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('tipodocumento.index')
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