<?php

namespace App\Http\Controllers\Api;

use App\Models\Etnium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EtniumRequest;

class EtniumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $etnia = Etnium::all();

            return response()->json([
                'etnia' => $etnia
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
            $etnium = new Etnium();

            return response()->json([
                'etnium' => $etnium,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtniumRequest $request)
    {
        try {
            Etnium::create($request->validated());

            return response()->json([
                'success' => 'Asignación de beneficio realizado con éxito.'
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
            $etnium = Etnium::where('IdEtnia', $id)->first();

            if (!$etnium) {
                return response()->json(['error' => 'Étnia no encontrada'], 404);
            }

            return response()->json(['etnium' => $etnium]);
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
            $etnium = Etnium::find($id);

            return response()->json([
                'etnium' => $etnium,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, EtniumRequest $request)
    {
        try {
            $etnium = Etnium::findOrFail($id);

            if ($id != $request->IdEtnia) {
                return response()->json([
                    'success' => 'Ingrese el campo IdEtnia igual al parámetro de query.'
                ]);
            }
            $etnium->update($request->all());

            return response()->json([
                'success' => 'Étnia modificada con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $asignarbeneficio = Etnium::where('IdEtnia', $id)->firstOrFail();
            $asignarbeneficio->delete();

            return response()->json(['success' => 'Étnia eliminada con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
