<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rangobeneficioconsolidadoasignado;
use App\Http\Requests\RangobeneficioconsolidadoasignadoRequest;


class RangobeneficioconsolidadoasignadoController extends Controller
{
    public function index()
    {
        try {
            $rangobeneficioconsolidadoasignados = Rangobeneficioconsolidadoasignado::all();
            
            return response()->json([
                'rangobeneficioconsolidadoasignados' => $rangobeneficioconsolidadoasignados
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $rangobeneficioconsolidadoasignado = new Rangobeneficioconsolidadoasignado();
            
            return response()->json([
                'rangobeneficioconsolidadoasignado' => $rangobeneficioconsolidadoasignado
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(RangobeneficioconsolidadoasignadoRequest $request)
    {
        try {
            Rangobeneficioconsolidadoasignado::create($request->validated());

            return response()->json([
                'success' => 'Rango de beneficio consolidado asignado creado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $rangobeneficioconsolidadoasignado = Rangobeneficioconsolidadoasignado::findOrFail($id);
            
            return response()->json(['rangobeneficioconsolidadoasignado' => $rangobeneficioconsolidadoasignado]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $rangobeneficioconsolidadoasignado = Rangobeneficioconsolidadoasignado::findOrFail($id);
            
            return response()->json(['rangobeneficioconsolidadoasignado' => $rangobeneficioconsolidadoasignado]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, RangobeneficioconsolidadoasignadoRequest $request)
    {
        try {
            $rangobeneficioconsolidadoasignado = Rangobeneficioconsolidadoasignado::findOrFail($id);

            if ($id != $request->IdRangoBeneficioConsolidadoAsignado) {
                return response()->json([
                    'success' => 'Ingrese el campo IdRangoBeneficioConsolidadoAsignado igual al parámetro de query.'
                ]);
            }

            $rangobeneficioconsolidadoasignado->update($request->all());

            return response()->json([
                'success' => 'Rango de beneficio consolidado asignado modificado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Rangobeneficioconsolidadoasignado::findOrFail($id)->delete();

            return response()->json(['success' => 'Rango de beneficio consolidado asignado eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}


