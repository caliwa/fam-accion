<?php

namespace App\Http\Controllers;

use App\Models\Etnium;
use Illuminate\Support\Facades\Http;

use App\Http\Requests\EtniumRequest;
use GuzzleHttp\Exception\RequestException;


/**
 * Class EtniumController
 * @package App\Http\Controllers
 */
class EtniumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/etnia");
            if($response->successful()){
                $response = $response->json();
                $etnia = $response['etnia'];

                $etnia = Etnium::orderBy('updated_at', 'desc')->paginate();

                return view('etnia.index', compact('etnia'))
                    ->with('i', (request()->input('page', 1) - 1) * $etnia->perPage());
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/etnia/create");
            
            if($response->successful()){
                $response = $response->json();
                $etnium = $response['etnium'];

                return view('etnia.create', compact('etnium'));
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
    public function store(EtniumRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))
            ->post(url('/') . "/api/etnia", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('etnia.index')
                ->with('success', $message);
            }
            else {
                $errorResponse = $response->json();
                $errorMessage = $errorResponse['error'] ?? 'Error desconocido al procesar la solicitud';
    
                // Verificar si el mensaje de error contiene palabras clave que indiquen un error SQL
                if (strpos($errorMessage, 'SQLSTATE') !== false || strpos($errorMessage, 'Integrity constraint violation') !== false) {
                    $errorMessage = 'La étnia con IdEtnia ' . $request['IdEtnia'] . ' ya se encuentra registrado en Familias en Acción';
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/etnia/{$id}");
            if($response->successful()){
                $response = $response->json();

                $etnium = new Etnium();
                $etnium->fill($response['etnium']);

                return view('etnia.show', compact('etnium'));
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
            $response = Http::withToken(session('token_api'))->get(url('/') . "/api/etnia/{$id}/edit");

            if($response->successful()){
                $response = $response->json();
                $etnium = json_decode(json_encode($response['etnium']), false);

                return view('etnia.edit', compact('etnium'));
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
    public function update(EtniumRequest $request)
    {
        try{
            $response = Http::withToken(session('token_api'))->patch(url('/') . "/api/etnia/{$request->validated()['IdEtnia']}", $request->validated());

            if($response->successful()){
                $response = $response->json();
                $message = $response['success'];

                return response()->redirectToRoute('etnia.index')
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
            $response = Http::withToken(session('token_api'))->delete(url('/') . "/api/etnia/{$id}");
            if($response->successful()){
                $response = $response->json();

                $message = $response['success'];

                return response()->redirectToRoute('etnia.index')
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
