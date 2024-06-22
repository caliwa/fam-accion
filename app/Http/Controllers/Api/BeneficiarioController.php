<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Beneficiario;
use App\Http\Requests\BeneficiarioRequest;
use App\Models\Etnium;
use App\Models\Nivelescolaridad;
use App\Models\Tipodocumento;
use App\Models\Tipopoblacion;
use App\Models\User;

/**
 * Class BeneficiarioController
 * @package App\Http\Controllers
 */
class BeneficiarioController extends Controller
{
    public function index()
    {
        try {
            $beneficiarios = Beneficiario::all();
            
            return response()->json([
                'beneficiarios' => $beneficiarios
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $beneficiario = new Beneficiario();
            $tipodocumento = Tipodocumento::pluck('TipoDocumento', 'IdTipoDocumento');
            $etnia = Etnium::pluck('Etnia', 'IdEtnia');
            $nivelescolaridad = Nivelescolaridad::pluck('NivelEscolaridad', 'IdNivelEscolaridad');
            $tipopoblacion = Tipopoblacion::pluck('TipoPoblacion', 'IdTipoPoblacion');
    
            return response()->json([
                'beneficiario' => $beneficiario,
                'tipodocumento' => $tipodocumento,
                'etnia' => $etnia,
                'nivelescolaridad' => $nivelescolaridad,
                'tipopoblacion' => $tipopoblacion,
            ]);    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(BeneficiarioRequest $request)
    {
        try {
            Beneficiario::create($request->validated());
    
            return response()->json([
                'success' => 'Asignación de beneficiario realizado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $beneficiario = Beneficiario::find($id);
    
            if (!$beneficiario) {
                return response()->json(['error' => 'Beneficiario no encontrado'], 404);
            }
            
            return response()->json(['beneficiario' => $beneficiario]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $beneficiario = Beneficiario::find($id);
            $tipodocumento = Tipodocumento::pluck('TipoDocumento', 'IdTipoDocumento');
            $etnia = Etnium::pluck('Etnia', 'IdEtnia');
            $nivelescolaridad = Nivelescolaridad::pluck('NivelEscolaridad', 'IdNivelEscolaridad');
            $tipopoblacion = Tipopoblacion::pluck('TipoPoblacion', 'IdTipoPoblacion');
    
            return response()->json([
                'beneficiario' => $beneficiario,
                'tipodocumento' => $tipodocumento,
                'etnia' => $etnia,
                'nivelescolaridad' => $nivelescolaridad,
                'tipopoblacion' => $tipopoblacion,
            ]);    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, BeneficiarioRequest $request)
    {
        try {
            $beneficiario = Beneficiario::where('id', $id)->firstOrFail();
    
            if($id != $request->id){
                return response()->json([
                    'success' => 'Ingrese el campo id igual al parámetro de query.'
                ]);
            }
    
            $beneficiario->update($request->all());
    
            return response()->json([
                'success' => 'Beneficiario modificado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Beneficiario::find($id)->delete();
            if(User::where('cedula', $id)){
                $usuario = User::where('cedula', $id)->firstOrFail();
                $usuario->delete();
            }
    
            return response()->json([
                'success' => 'Beneficiario eliminado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}