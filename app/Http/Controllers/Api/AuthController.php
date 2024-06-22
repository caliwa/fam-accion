<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Beneficiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function register_api(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cedula' => 'required|integer|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        if(Beneficiario::where('id', $request->cedula)->doesntExist()){
            return response()->json(['error' => 'La cédula ' .$request->cedula. ' no está pre-registrada o no tiene beneficio asignado en Familias en Acción'], 404);
        }

        $asignar_rol = Role::findByName('beneficiario');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cedula' => $request->cedula,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole($asignar_rol);

        return response()
            ->json(['data' => $user]);

            // ->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function login_api(Request $request){
        if(!Auth::attempt($request->only('email', 'password'))){
            return response()
                ->json(['message' => 'No autorizado'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'message' => 'Hola! ' . $user->name . ', te has logueado en Familias en Acción.',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
    }

    public function logout_api(){
        auth()->user()->tokens()->delete();

        return response()
            ->json([
            'message' => 'Te has desautenticado correctamente de Familias en acción'
        ]);
    }
}
