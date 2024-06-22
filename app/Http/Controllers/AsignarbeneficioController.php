<?php

namespace App\Http\Controllers;

use App\Models\Asignarbeneficio;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Exception\RequestException;

use App\Http\Requests\AsignarbeneficioRequest;


/**
 * Class AsignarbeneficioController
 * @package App\Http\Controllers
 */
class AsignarbeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('asignarbeneficio.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/asignarbeneficios/create");
            
            if(($response->json())['beneficiarios']){
                $response = $response->json();

                $asignarbeneficio  = $response['asignarbeneficio'];
                $beneficiarios  = $response['beneficiarios'];
                $tipobeneficio  = $response['tipobeneficio'];
                $rangobeneficioconsolidadoasignado  = $response['rangobeneficioconsolidadoasignado'];
                $municipio  = $response['municipio'];

                return view('asignarbeneficio.create', compact('asignarbeneficio', 'beneficiarios', 'tipobeneficio', 'rangobeneficioconsolidadoasignado', 'municipio'));
            }
            return back()->with('message', 'No hay beneficiarios disponibles para asignarles un beneficio.');

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
    public function store(AsignarbeneficioRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))
            ->post(url('/') . "/api/asignarbeneficios", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $meesage = $response['success'];

                return response()->redirectToRoute('asignarbeneficio.index')
                    ->with('success', $meesage);
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
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/asignarbeneficios/{$id}");
            if($response->successful()){
                $response = $response->json();
                $asignarbeneficio = new Asignarbeneficio();
                $asignarbeneficio->fill($response['asignarbeneficio']);

                return view('asignarbeneficio.show', compact('asignarbeneficio'));
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
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/asignarbeneficios/{$id}/edit");
            // dd($response->json());

            if($response->successful()){
                $response = $response->json();
                $asignarbeneficio  = json_decode(json_encode($response['asignarbeneficio']), false);
                $beneficiarios  = json_decode(json_encode($response['beneficiarios']), false);
                $tipobeneficio  = json_decode(json_encode($response['tipobeneficio']), false);
                $rangobeneficioconsolidadoasignado  = json_decode(json_encode($response['rangobeneficioconsolidadoasignado']), false);
                $municipio  = json_decode(json_encode($response['municipio']), false);

                return view('asignarbeneficio.edit', compact('asignarbeneficio', 'beneficiarios', 'tipobeneficio', 'rangobeneficioconsolidadoasignado', 'municipio'));
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
    public function update(AsignarbeneficioRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/asignarbeneficios/{$request->validated()['Cedula']}", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];
                if(auth()->user()->hasRole('admin')){
                    return response()->redirectToRoute('asignarbeneficio.index')
                        ->with('success', $message);
                }else if(auth()->user()->hasRole('beneficiario')){
                    return response()->redirectToRoute('asignarbeneficio.show', auth()->user()->cedula)
                        ->with('success', $message);
                }
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/asignarbeneficios/{$id}");
            if($response->successful()){
                $response = $response->json();

                $message = $response['success'];

                return response()->redirectToRoute('asignarbeneficio.index')
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
