<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nivelescolaridad;
use App\Http\Requests\NivelescolaridadRequest;

class NivelescolaridadController extends Controller
{
    public function index()
    {
        try {
            $nivelescolaridades = Nivelescolaridad::all();
            
            return response()->json([
                'nivelescolaridades' => $nivelescolaridades
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $nivelescolaridad = new Nivelescolaridad();
            
            return response()->json([
                'nivelescolaridad' => $nivelescolaridad
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(NivelescolaridadRequest $request)
    {
        try {
            Nivelescolaridad::create($request->validated());

            return response()->json([
                'success' => 'Nivel de escolaridad creado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $nivelescolaridad = Nivelescolaridad::findOrFail($id);
            
            return response()->json(['nivelescolaridad' => $nivelescolaridad]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $nivelescolaridad = Nivelescolaridad::findOrFail($id);
            
            return response()->json(['nivelescolaridad' => $nivelescolaridad]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, NivelescolaridadRequest $request)
    {
        try {
            $nivelescolaridad = Nivelescolaridad::findOrFail($id);

            if ($id != $request->IdNivelEscolaridad) {
                return response()->json([
                    'success' => 'Ingrese el campo IdNivelEscolaridad igual al parámetro de query.'
                ]);
            }

            $nivelescolaridad->update($request->all());

            return response()->json([
                'success' => 'Nivel de escolaridad modificado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Nivelescolaridad::findOrFail($id)->delete();

            return response()->json(['success' => 'Nivel de escolaridad eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

