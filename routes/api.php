<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EtniumController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\BeneficiarioController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\TipobeneficioController;
use App\Http\Controllers\Api\TipodocumentoController;
use App\Http\Controllers\Api\TipopoblacionController;
use App\Http\Controllers\Api\AsignarbeneficioController;
use App\Http\Controllers\Api\NivelescolaridadController;
use App\Http\Controllers\Api\RangobeneficioconsolidadoasignadoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class, 'login_api']);
Route::post('/register', [AuthController::class, 'register_api']);

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/asignarbeneficios', [AsignarbeneficioController::class, 'index']);
    Route::get('/asignarbeneficios/create', [AsignarbeneficioController::class, 'create']);
    Route::post('/asignarbeneficios', [AsignarbeneficioController::class, 'store']);
    Route::delete('/asignarbeneficios/{asignarbeneficio}', [AsignarbeneficioController::class, 'destroy']);
    
    Route::get('/beneficiarios', [BeneficiarioController::class, 'index']);
    Route::get('/beneficiarios/create', [BeneficiarioController::class, 'create']);
    Route::post('/beneficiarios', [BeneficiarioController::class, 'store']);
    Route::get('/beneficiarios/{beneficiario}', [BeneficiarioController::class, 'show']);
    Route::get('/beneficiarios/{beneficiario}/edit', [BeneficiarioController::class, 'edit']);
    Route::patch('/beneficiarios/{beneficiario}', [BeneficiarioController::class, 'update']);
    Route::delete('/beneficiarios/{beneficiario}', [BeneficiarioController::class, 'destroy']);
    
    Route::get('/departamento', [DepartamentoController::class, 'index']);
    Route::get('/departamento/create', [DepartamentoController::class, 'create']);
    Route::post('/departamento', [DepartamentoController::class, 'store']);
    Route::get('/departamento/{departamento}', [DepartamentoController::class, 'show']);
    Route::get('/departamento/{departamento}/edit', [DepartamentoController::class, 'edit']);
    Route::patch('/departamento/{departamento}', [DepartamentoController::class, 'update']);
    Route::delete('/departamento/{departamento}', [DepartamentoController::class, 'destroy']);
    
    Route::get('/etnia', [EtniumController::class, 'index']);
    Route::get('/etnia/create', [EtniumController::class, 'create']);
    Route::post('/etnia', [EtniumController::class, 'store']);
    Route::get('/etnia/{etnium}', [EtniumController::class, 'show']);
    Route::get('/etnia/{etnium}/edit', [EtniumController::class, 'edit']);
    Route::patch('/etnia/{etnium}', [EtniumController::class, 'update']);
    Route::delete('/etnia/{etnium}', [EtniumController::class, 'destroy']);
    
    Route::get('/municipio', [MunicipioController::class, 'index']);
    Route::get('/municipio/create', [MunicipioController::class, 'create']);
    Route::post('/municipio', [MunicipioController::class, 'store']);
    Route::get('/municipio/{municipio}', [MunicipioController::class, 'show']);
    Route::get('/municipio/{municipio}/edit', [MunicipioController::class, 'edit']);
    Route::patch('/municipio/{municipio}', [MunicipioController::class, 'update']);
    Route::delete('/municipio/{municipio}', [MunicipioController::class, 'destroy']);
    
    Route::get('/nivelescolaridad', [NivelescolaridadController::class, 'index']);
    Route::get('/nivelescolaridad/create', [NivelescolaridadController::class, 'create']);
    Route::post('/nivelescolaridad', [NivelescolaridadController::class, 'store']);
    Route::get('/nivelescolaridad/{nivelescolaridad}', [NivelescolaridadController::class, 'show']);
    Route::get('/nivelescolaridad/{nivelescolaridad}/edit', [NivelescolaridadController::class, 'edit']);
    Route::patch('/nivelescolaridad/{nivelescolaridad}', [NivelescolaridadController::class, 'update']);
    Route::delete('/nivelescolaridad/{nivelescolaridad}', [NivelescolaridadController::class, 'destroy']);
    
    Route::get('/rangobeneficioconsolidadoasignado', [RangobeneficioconsolidadoasignadoController::class, 'index']);
    Route::get('/rangobeneficioconsolidadoasignado/create', [RangobeneficioconsolidadoasignadoController::class, 'create']);
    Route::post('/rangobeneficioconsolidadoasignado', [RangobeneficioconsolidadoasignadoController::class, 'store']);
    Route::get('/rangobeneficioconsolidadoasignado/{rango}', [RangobeneficioconsolidadoasignadoController::class, 'show']);
    Route::get('/rangobeneficioconsolidadoasignado/{rango}/edit', [RangobeneficioconsolidadoasignadoController::class, 'edit']);
    Route::patch('/rangobeneficioconsolidadoasignado/{rango}', [RangobeneficioconsolidadoasignadoController::class, 'update']);
    Route::delete('/rangobeneficioconsolidadoasignado/{rango}', [RangobeneficioconsolidadoasignadoController::class, 'destroy']);
    
    Route::get('/tipobeneficio', [TipobeneficioController::class, 'index']);
    Route::get('/tipobeneficio/create', [TipobeneficioController::class, 'create']);
    Route::post('/tipobeneficio', [TipobeneficioController::class, 'store']);
    Route::get('/tipobeneficio/{tipobeneficio}', [TipobeneficioController::class, 'show']);
    Route::get('/tipobeneficio/{tipobeneficio}/edit', [TipobeneficioController::class, 'edit']);
    Route::patch('/tipobeneficio/{tipobeneficio}', [TipobeneficioController::class, 'update']);
    Route::delete('/tipobeneficio/{tipobeneficio}', [TipobeneficioController::class, 'destroy']);
    
    Route::get('/tipodocumento', [TipodocumentoController::class, 'index']);
    Route::get('/tipodocumento/create', [TipodocumentoController::class, 'create']);
    Route::post('/tipodocumento', [TipodocumentoController::class, 'store']);
    Route::get('/tipodocumento/{tipodocumento}', [TipodocumentoController::class, 'show']);
    Route::get('/tipodocumento/{tipodocumento}/edit', [TipodocumentoController::class, 'edit']);
    Route::patch('/tipodocumento/{tipodocumento}', [TipodocumentoController::class, 'update']);
    Route::delete('/tipodocumento/{tipodocumento}', [TipodocumentoController::class, 'destroy']);
    
    Route::get('/tipopoblacion', [TipopoblacionController::class, 'index']);
    Route::get('/tipopoblacion/create', [TipopoblacionController::class, 'create']);
    Route::post('/tipopoblacion', [TipopoblacionController::class, 'store']);
    Route::get('/tipopoblacion/{tipopoblacion}', [TipopoblacionController::class, 'show']);
    Route::get('/tipopoblacion/{tipopoblacion}/edit', [TipopoblacionController::class, 'edit']);
    Route::patch('/tipopoblacion/{tipopoblacion}', [TipopoblacionController::class, 'update']);
    Route::delete('/tipopoblacion/{tipopoblacion}', [TipopoblacionController::class, 'destroy']);
});


Route::middleware(['auth:sanctum', 'role:admin|beneficiario'])->group(function () {
    Route::get('/asignarbeneficios/{asignarbeneficio}', [AsignarbeneficioController::class, 'show']);
    Route::get('/asignarbeneficios/{asignarbeneficio}/edit', [AsignarbeneficioController::class, 'edit']);
    Route::patch('/asignarbeneficios/{asignarbeneficio}', [AsignarbeneficioController::class, 'update']);

    Route::post('/logout', [AuthController::class, 'logout_api']);
});