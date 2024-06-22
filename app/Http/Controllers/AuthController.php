<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\RequestException;
use App\Models\AsignarBeneficio;


class AuthController extends Controller
{
    public function login_index(){
        if(auth()->user()){
            return response()->redirectToRoute('home');
        }
        return view('auth.login');
    }

    public function register_index(){
        return view('auth.register');
    }

    public function login_post(Request $request){
        validator(request()->all(),[
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255'
        ])->validate();

        if(auth()->attempt(request()->only(['email', 'password']))){
            try {
                $response = Http::post(url('/') . "/api/login", [
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                ]);

                if($response->successful()){
                    $data = $response->json();
                    session(['token_api' => $data['access_token']]);
                    return response()->redirectToRoute('home');
                }
                else{
                    return back();
                }
            } catch (RequestException $e) {
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
        }else{
            return back()->with('error_auth', 'Usuario / contraseña incorrectos');
        }
    }

    public function register_post(Request $request){
        validator(request()->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cedula' => 'required|integer|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ])->validate();

        try {
            $response = Http::post(url('/') . "/api/register", [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'cedula' => $request->input('cedula'),
                'name' => $request->input('name'),
            ]);

            if($response->successful()){

                auth()->logout();
                return response()->redirectToRoute('login.app')->with('message', $request->input('email') . ' ha sido registrado correctamente.');
            }else{
                return back()
                ->with('error', $response->json('error'));
            }
        } catch (RequestException $e) {
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

    public function logout(Request $request){
        try {
            $response = Http::withToken(session('token_api'))->post(url('/') . "/api/logout");
      
            if($response->successful()){
                auth()->logout();
                return response()->redirectToRoute('login.app')->with('message', 'Te has deslogueado satisfactoriamente.');
            }
        } catch (RequestException $e) {
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
