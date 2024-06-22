<?php

namespace App\Http\Controllers;

use App\Models\Beneficiario;
use App\Http\Requests\BeneficiarioRequest;

use Livewire\Component;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Database\QueryException;

/**
 * Class BeneficiarioController
 * @package App\Http\Controllers
 */
class BeneficiarioController extends Component
{
    /**
     * Display a listing of the resource.
     */
    public function render()
    {
        return view('beneficiario.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/beneficiarios/create");

            if($response->successful()){
                $response = $response->json();
                $beneficiario =new Beneficiario();
                $beneficiario->fill($response['beneficiario']);
                $tipodocumento = $response['tipodocumento'];
                $etnia = $response['etnia'];
                $nivelescolaridad = $response['nivelescolaridad'];
                $tipopoblacion = $response['tipopoblacion'];

                return view('beneficiario.create', compact('beneficiario', 'tipodocumento', 'etnia', 'nivelescolaridad', 'tipopoblacion'));
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
    public function store(BeneficiarioRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))
            ->post(url('/') . "/api/beneficiarios", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];


                return response()->redirectToRoute('beneficiario.index')
                    ->with('success', $message);
            } else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'Un beneficiario con la cédula ' . $request['id'] . ' ya se encuentra registrado en Familias en Acción';
                }
                return back()->with('error', $errorMessage);
            }
    } catch (QueryException $e) {
        if ($e->errorInfo[1] === 1062) {
            return back()->with('error', 'Ya existe un beneficiario con este ID. Por favor, inténtalo de nuevo con un ID diferente.');
        } else {
            return back()->with('error', 'Ha ocurrido un error en la base de datos. Por favor, inténtalo de nuevo más tarde.');
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/beneficiarios/{$id}");

            if($response->successful()){
                $response = $response->json();

                $beneficiario = new Beneficiario();
                $beneficiario->fill($response['beneficiario']);
                return view('beneficiario.show', compact('beneficiario'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/beneficiarios/{$id}/edit");

            if($response->successful()){
                $response = $response->json();

                $beneficiario  = json_decode(json_encode($response['beneficiario']), false);
                $tipodocumento  = json_decode(json_encode($response['tipodocumento']), false);
                $etnia  = json_decode(json_encode($response['etnia']), false);
                $nivelescolaridad  = json_decode(json_encode($response['nivelescolaridad']), false);
                $tipopoblacion  = json_decode(json_encode($response['tipopoblacion']), false);
                
                return view('beneficiario.edit', compact('beneficiario', 'tipodocumento', 'etnia', 'nivelescolaridad', 'tipopoblacion'));
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
    public function update(BeneficiarioRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/beneficiarios/{$request->validated()['id']}", $request->validated());
            if($response->successful()){
                
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('beneficiario.index')
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/beneficiarios/{$id}");

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('beneficiario.index')
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
