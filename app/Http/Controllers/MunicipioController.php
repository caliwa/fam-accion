<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Http\Requests\MunicipioRequest;
use App\Models\Departamento;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\RequestException;
/**
 * Class MunicipioController
 * @package App\Http\Controllers
 */
class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/municipio");

            if($response->successful()){
                $response = $response->json();
                
                $municipios = $response['municipios'];

                $municipios = Municipio::orderBy('updated_at', 'desc')->paginate();

                return view('municipio.index', compact('municipios'))
                    ->with('i', (request()->input('page', 1) - 1) * $municipios->perPage());
                }
            }catch (RequestException $e) {
                if ($e->hasResponse()) {
                    $response = $e->getResponse();
                    $statusCode = $response->getStatusCode();
                    $body = $response->getBody()->getContents();
                    $errorResponse = json_decode($body, true);
                    return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
                } else {
                    echo "Error al realizar la solicitud: " . $e->getMessage();
                }
            }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/municipio/create");

            if($response->json()['departamento']) {
                $response = $response->json();

                $municipio = $response['municipio'];
                $departamento = $response['departamento'];

                return view('municipio.create', compact('municipio', 'departamento'));
            }
            return back()->with('message', 'No hay departamentos disponibles para asignarles un municipio.');

        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MunicipioRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))
            ->post(url('/') . "/api/municipio", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response["success"];

                return response()->redirectToRoute('municipio.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El municipio con CodigoMunicipioAtencion ' . $request['CodigoMunicipioAtencion'] . ' ya se encuentra registrado en Familias en Acción';
                }
                return back()->with('error', $errorMessage);
            }
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/municipio/{$id}");
            if($response->successful()){
                $response = $response->json();
                $municipio = new Municipio();
                $municipio->fill($response['municipio']);

                return view('municipio.show', compact('municipio'));
            }else{
                return back()
                ->with('error_auth', $response->json('error'));
            }
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/municipio/{$id}/edit");

            if($response->successful()){
                $response = $response->json();
                $municipio = json_decode(json_encode($response['municipio']), false);
                $departamento = json_decode(json_encode($response['departamento']), false);

                return view('municipio.edit', compact('municipio', 'departamento'));
            }else{
                return back()
                ->with('success', $response->json('error'));
            }
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MunicipioRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/municipio/{$request->validated()['CodigoMunicipioAtencion']}", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('municipio.index')
                    ->with('success', $message);
            }
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }

    public function destroy($id)
    {
        try{
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/municipio/{$id}");
            if($response->successful()){
                $response = $response->json();

                $message = $response['success'];

                return response()->redirectToRoute('municipio.index')
                ->with('success', $message);
            }else{
                return back()
                ->with('success', $response->json('error'));
            }
        }catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody()->getContents();
                $errorResponse = json_decode($body, true);
                return back()->with('error_auth', 'Código Error:'. $statusCode . ' - '.$errorResponse['message']);
            } else {
                echo "Error al realizar la solicitud: " . $e->getMessage();
            }
        }
    }
}
