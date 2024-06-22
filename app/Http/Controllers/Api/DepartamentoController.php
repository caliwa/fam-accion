<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Http\Requests\DepartamentoRequest;
use Illuminate\Support\Facades\Http;

class DepartamentoController extends Controller
{
    public function index()
    {
        try {
            $departamentos = Departamento::all();
            
            return response()->json([
                'departamentos' => $departamentos
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $departamento = new Departamento();
            
            return response()->json([
                'departamento' => $departamento
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(DepartamentoRequest $request)
    {
        try {
            Departamento::create($request->validated());

            return response()->json([
                'success' => 'Departamento creado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $departamento = Departamento::findOrFail($id);
            
            return response()->json(['departamento' => $departamento]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $departamento = Departamento::findOrFail($id);
            
            return response()->json(['departamento' => $departamento]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update($id, DepartamentoRequest $request)
    {
        try {
            $departamento = Departamento::findOrFail($id);

            if ($id != $request->CodigoDepartamentoAtencion) {
                return response()->json([
                    'success' => 'Ingrese el campo CodigoDepartamentoAtencion igual al parámetro de query.'
                ]);
            }

            $departamento->update($request->all());

            return response()->json([
                'success' => 'Departamento modificado realizado con éxito.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            Departamento::findOrFail($id)->delete();

            return response()->json(['success' => 'Asignación de beneficio eliminado con éxito.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
