<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Tipopoblacion;
use App\Http\Controllers\Controller;
use App\Http\Requests\TipopoblacionRequest;


class TipopoblacionController extends Controller
{
    public function index()
    {
        try {
            $tipopoblacion = Tipopoblacion::all();
            
            return response()->json([
                'tipopoblacions' => $tipopoblacion
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $tipopoblacion = new Tipopoblacion();
            
            return response()->json([
                'tipopoblacion' => $tipopoblacion
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(TipopoblacionRequest $request)
    {
        try {
            Tipopoblacion::create($request->validated());

            return response()->json([
                'success' => 'Tipo de población creado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $tipopoblacion = Tipopoblacion::findOrFail($id);
            
            return response()->json(['tipopoblacion' => $tipopoblacion]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $tipopoblacion = Tipopoblacion::findOrFail($id);
            
            return response()->json(['tipopoblacion' => $tipopoblacion]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, TipopoblacionRequest $request)
    {
        try {
            $tipopoblacion = Tipopoblacion::findOrFail($id);

            if ($id != $request->IdTipoPoblacion) {
                return response()->json([
                    'success' => 'Ingrese el campo IdTipoPoblacion igual al parámetro de query.'
                ]);
            }

            $tipopoblacion->update($request->all());

            return response()->json([
                'success' => 'Tipo de población modificado realizado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Tipopoblacion::findOrFail($id)->delete();

            return response()->json(['success' => 'Tipo de población eliminada con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

