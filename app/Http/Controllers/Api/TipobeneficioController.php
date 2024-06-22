<?php

namespace App\Http\Controllers\Api;

use App\Models\Tipobeneficio;
use App\Http\Controllers\Controller;
use App\Http\Requests\TipobeneficioRequest;


class TipobeneficioController extends Controller
{
    public function index()
    {
        try {
            $tipobeneficios = Tipobeneficio::all();
            
            return response()->json([
                'tipobeneficios' => $tipobeneficios
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $tipobeneficio = new Tipobeneficio();
            
            return response()->json([
                'tipobeneficio' => $tipobeneficio
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(TipobeneficioRequest $request)
    {
        try {
            Tipobeneficio::create($request->validated());

            return response()->json([
                'success' => 'Tipo de beneficio creado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $tipobeneficio = Tipobeneficio::findOrFail($id);
            
            return response()->json(['tipobeneficio' => $tipobeneficio]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $tipobeneficio = Tipobeneficio::findOrFail($id);
            
            return response()->json(['tipobeneficio' => $tipobeneficio]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, TipobeneficioRequest $request)
    {
        try {
            $tipobeneficio = Tipobeneficio::findOrFail($id);

            if ($id != $request->IdTipoBeneficio) {
                return response()->json([
                    'success' => 'Ingrese el campo IdTipoBeneficio igual al parámetro de query.'
                ]);
            }

            $tipobeneficio->update($request->all());

            return response()->json([
                'success' => 'Tipo de beneficio modificado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Tipobeneficio::findOrFail($id)->delete();

            return response()->json(['success' => 'Tipo de beneficio eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

