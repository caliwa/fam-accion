<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Exception\RequestException;

use App\Models\Departamento;
use App\Http\Requests\DepartamentoRequest;

/**
 * Class DepartamentoController
 * @package App\Http\Controllers
 */
class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/departamento");

            if($response->successful()){
                $response = $response->json();

                $departamentos  = $response['departamentos'];

                $departamentos = Departamento::orderBy('updated_at', 'desc')->paginate();

                return view('departamento.index', compact('departamentos'))
                    ->with('i', (request()->input('page', 1) - 1) * $departamentos->perPage());
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/departamento/create");

            if($response->successful()){
                $response = $response->json();

                $departamento = $response['departamento'];

                return view('departamento.create', compact('departamento'));
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
     * Store a newly created resource in storage.
     */
    public function store(DepartamentoRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/departamento", $request->validated());

            if($response->successful()){
                $response = $response->json();

                $message = $response['success'];

                return response()->redirectToRoute('departamento.index')
                    ->with('success', $message);
            }else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'El departamento con CodigoDepartamentoAtencion ' . $request['CodigoDepartamentoAtencion'] . ' ya se encuentra registrado en Familias en Acción';
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/departamento/{$id}");
            if($response->successful()){
                $response = $response->json();

                $departamento = new Departamento();

                $departamento->fill($response['departamento']);

                return view('departamento.show', compact('departamento'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/departamento/{$id}/edit");
            // dd($response->json());

            if($response->successful()){
                $response = $response->json();

                $departamento = json_decode(json_encode($response['departamento']), false);

                return view('departamento.edit', compact('departamento'));
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
    public function update(DepartamentoRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/departamento/{$request->validated()['CodigoDepartamentoAtencion']}", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('departamento.index')
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

    public function destroy($id)
    {
        try{
                $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/departamento/{$id}");
                if($response->successful()){
                    $response = $response->json();
                    $message = $response['success'];

                    return response()->redirectToRoute('departamento.index')
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
