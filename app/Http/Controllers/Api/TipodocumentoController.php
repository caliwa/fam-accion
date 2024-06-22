<?php

namespace App\Http\Controllers\Api;

use App\Models\Tipodocumento;
use App\Http\Controllers\Controller;
use App\Http\Requests\TipodocumentoRequest;


class TipodocumentoController extends Controller
{
    public function index()
    {
        try {
            $tipodocumentos = Tipodocumento::all();
            
            return response()->json([
                'tipodocumentos' => $tipodocumentos
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $tipodocumento = new Tipodocumento();
            
            return response()->json([
                'tipodocumento' => $tipodocumento
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(TipodocumentoRequest $request)
    {
        try {
            Tipodocumento::create($request->validated());

            return response()->json([
                'success' => 'Tipo de documento creado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $tipodocumento = Tipodocumento::findOrFail($id);
            
            return response()->json(['tipodocumento' => $tipodocumento]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $tipodocumento = Tipodocumento::findOrFail($id);
            
            return response()->json(['tipodocumento' => $tipodocumento]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, TipodocumentoRequest $request)
    {
        try {
            $tipodocumento = Tipodocumento::findOrFail($id);

            if ($id != $request->IdTipoDocumento) {
                return response()->json([
                    'success' => 'Ingrese el campo IdTipoDocumento igual al parámetro de query.'
                ]);
            }

            $tipodocumento->update($request->all());

            return response()->json([
                'success' => 'Tipo de documento modificado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Tipodocumento::findOrFail($id)->delete();

            return response()->json(['success' => 'Tipo de documento eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

