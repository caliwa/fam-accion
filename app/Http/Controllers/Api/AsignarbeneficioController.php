<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asignarbeneficio;
use App\Models\Tipobeneficio;
use App\Models\Rangobeneficioconsolidadoasignado;
use App\Models\Municipio;
use App\Models\Beneficiario;


use App\Http\Requests\AsignarbeneficioRequest;

/**
 * Class AsignarbeneficioController
 * @package App\Http\Controllers
 */

class AsignarbeneficioController extends Controller
{
    public function index()
    {
        try {
            $asignarbeneficios = Asignarbeneficio::all();
            
            return response()->json([
                'asignarbeneficios' => $asignarbeneficios
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $asignarbeneficio = new Asignarbeneficio();
            $beneficiarios = Beneficiario::whereNotIn('id', function ($query) {
                $query->select('Cedula')->from('asignarbeneficios');
            })->pluck('id');

            $tipobeneficio = Tipobeneficio::pluck('TipoBeneficio', 'IdTipoBeneficio');
            $rangobeneficioconsolidadoasignado = Rangobeneficioconsolidadoasignado::pluck('RangoBeneficioConsolidadoAsignado', 'IdRangoBeneficioConsolidadoAsignado');
            $municipio = Municipio::pluck('NombreMunicipioAtencion', 'CodigoMunicipioAtencion');

            return response()->json([
                'asignarbeneficio' => $asignarbeneficio,
                'beneficiarios' => $beneficiarios,
                'tipobeneficio' => $tipobeneficio,
                'rangobeneficioconsolidadoasignado' => $rangobeneficioconsolidadoasignado,
                'municipio' => $municipio,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(AsignarbeneficioRequest $request)
    {
        try {
            Asignarbeneficio::create($request->all());

            return response()->json([
                'success' => 'Asignación de beneficio realizado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $asignarbeneficio = Asignarbeneficio::where('Cedula', $id)->first();

            if (!$asignarbeneficio) {
                if(auth()->user()->hasRole('admin')){
                    return response()->json(['error' => 'Asignarbeneficio no encontrado'], 404);
                }else if(auth()->user()->hasRole('beneficiario')){
                    return response()->json(['error' => 'No hay beneficio asignado para usted con Nro. de documento '. auth()->user()->cedula], 404);
                }
            }

            return response()->json(['asignarbeneficio' => $asignarbeneficio]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $asignarbeneficio = Asignarbeneficio::where('Cedula', $id)->first();
            $beneficiarios = [$id => $id];
            $tipobeneficio = Tipobeneficio::pluck('TipoBeneficio', 'IdTipoBeneficio');
            $rangobeneficioconsolidadoasignado = Rangobeneficioconsolidadoasignado::pluck('RangoBeneficioConsolidadoAsignado', 'IdRangoBeneficioConsolidadoAsignado');
            $municipio = Municipio::pluck('NombreMunicipioAtencion', 'CodigoMunicipioAtencion');

            return response()->json([
                'asignarbeneficio' => $asignarbeneficio,
                'beneficiarios' => $beneficiarios,
                'tipobeneficio' => $tipobeneficio,
                'rangobeneficioconsolidadoasignado' => $rangobeneficioconsolidadoasignado,
                'municipio' => $municipio,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, AsignarbeneficioRequest $request)
    {
        try {
            $asignarbeneficio = Asignarbeneficio::where('Cedula', $id)->firstOrFail();

            if ($id != $request->Cedula) {
                return response()->json([
                    'success' => 'Ingrese el campo Cedula igual al parámetro de query.'
                ]);
            }

            $asignarbeneficio->update($request->all());

            return response()->json([
                'success' => 'Asignación de beneficio realizado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $asignarbeneficio = Asignarbeneficio::where('Cedula', $id)->firstOrFail();
            $asignarbeneficio->delete();

            return response()->json(['success' => 'Asignación de beneficio eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
