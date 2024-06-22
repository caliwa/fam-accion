<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipio;
use App\Models\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\MunicipioRequest;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $municipios = Municipio::paginate();

            return response()->json([
                'municipios' => $municipios
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $municipio = new Municipio();
            $departamento = Departamento::pluck('NombreDepartamentoAtencion', 'CodigoDepartamentoAtencion');

            return response()->json([
                'municipio' => $municipio,
                'departamento' => $departamento,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MunicipioRequest $request)
    {
        try {
            Municipio::create($request->validated());

            return response()->json([
                'success' => 'Municipio guardado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $municipio = Municipio::find($id);

            if (!$municipio) {
                return response()->json(['error' => 'Municipio no encontrado'], 404);
            }

            return response()->json(['municipio' => $municipio]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $municipio = Municipio::find($id);

            $departamento = Departamento::pluck('NombreDepartamentoAtencion', 'CodigoDepartamentoAtencion');

            return response()->json([
                'municipio' => $municipio,
                'departamento' => $departamento,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, MunicipioRequest $request)
    {
        try {
            $municipio = Municipio::where('CodigoMunicipioAtencion', $id)->firstOrFail();


            $municipio->update($request->validated());

            if ($id != $request->CodigoMunicipioAtencion) {
                return response()->json([
                    'success' => 'Ingrese el campo CodigoMunicipioAtencion igual al parámetro de query.'
                ]);
            }

            $municipio->update($request->all());

            return response()->json([
                'success' => 'Municipio actualizado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $municipio = Municipio::where('CodigoMunicipioAtencion', $id)->firstOrFail();
            $municipio->delete();

            return response()->json(['success' => 'Municipio eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
