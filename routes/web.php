<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtniumController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TipobeneficioController;
use App\Http\Controllers\TipodocumentoController;
use App\Http\Controllers\TipopoblacionController;
use App\Http\Controllers\AsignarbeneficioController;
use App\Http\Controllers\NivelescolaridadController;
use App\Http\Controllers\RangobeneficioconsolidadoasignadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('login-app');
});
Route::post('/loginpost-app', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/login-app', [AuthController::class, 'login_index'])->name('login.app');
Route::post('/registerpost-app', [AuthController::class, 'register_post'])->name('register.post');
Route::get('/register-app', [AuthController::class, 'register_index'])->name('register.app');

Route::middleware(['auth', 'prevent-back-history', 'role:admin'])->group(function () {
    Route::get('/asignarbeneficios-app', [AsignarbeneficioController::class, 'index'])->name('asignarbeneficio.index');
    Route::get('/asignarbeneficios-app/create', [AsignarbeneficioController::class, 'create'])->name('asignarbeneficio.create');
    Route::post('/asignarbeneficios-app', [AsignarbeneficioController::class, 'store'])->name('asignarbeneficio.store');
    Route::delete('/asignarbeneficios-app/{asignarbeneficio}', [AsignarbeneficioController::class, 'destroy'])->name('asignarbeneficio.destroy');

    Route::get('/beneficiarios-app', [BeneficiarioController::class, 'render'])->name('beneficiario.index');
    Route::get('/beneficiarios-app/create', [BeneficiarioController::class, 'create'])->name('beneficiario.create');
    Route::post('/beneficiarios-app', [BeneficiarioController::class, 'store'])->name('beneficiario.store');
    Route::get('/beneficiarios-app/{beneficiario}', [BeneficiarioController::class, 'show'])->name('beneficiario.show');
    Route::get('/beneficiarios-app/{beneficiario}/edit', [BeneficiarioController::class, 'edit'])->name('beneficiario.edit');
    Route::patch('/beneficiarios-app/{beneficiario}', [BeneficiarioController::class, 'update'])->name('beneficiario.update');
    Route::delete('/beneficiarios-app/{beneficiario}', [BeneficiarioController::class, 'destroy'])->name('beneficiario.destroy');

    Route::get('/departamento-app', [DepartamentoController::class, 'index'])->name('departamento.index');
    Route::get('/departamento-app/create', [DepartamentoController::class, 'create'])->name('departamento.create');
    Route::post('/departamento-app', [DepartamentoController::class, 'store'])->name('departamento.store');
    Route::get('/departamento-app/{departamento}', [DepartamentoController::class, 'show'])->name('departamento.show');
    Route::get('/departamento-app/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamento.edit');
    Route::patch('/departamento-app/{departamento}', [DepartamentoController::class, 'update'])->name('departamento.update');
    Route::delete('/departamento-app/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');

    Route::get('/etnia-app', [EtniumController::class, 'index'])->name('etnia.index');
    Route::get('/etnia-app/create', [EtniumController::class, 'create'])->name('etnia.create');
    Route::post('/etnia-app', [EtniumController::class, 'store'])->name('etnia.store');
    Route::get('/etnia-app/{etnium}', [EtniumController::class, 'show'])->name('etnia.show');
    Route::get('/etnia-app/{etnium}/edit', [EtniumController::class, 'edit'])->name('etnia.edit');
    Route::patch('/etnia-app/{etnium}', [EtniumController::class, 'update'])->name('etnia.update');
    Route::delete('/etnia-app/{etnium}', [EtniumController::class, 'destroy'])->name('etnia.destroy');

    Route::get('/municipio-app', [MunicipioController::class, 'index'])->name('municipio.index');
    Route::get('/municipio-app/create', [MunicipioController::class, 'create'])->name('municipio.create');
    Route::post('/municipio-app', [MunicipioController::class, 'store'])->name('municipio.store');
    Route::get('/municipio-app/{municipio}', [MunicipioController::class, 'show'])->name('municipio.show');
    Route::get('/municipio-app/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipio.edit');
    Route::patch('/municipio-app/{municipio}', [MunicipioController::class, 'update'])->name('municipio.update');
    Route::delete('/municipio-app/{municipio}', [MunicipioController::class, 'destroy'])->name('municipio.destroy');

    Route::get('/nivelescolaridad-app', [NivelescolaridadController::class, 'index'])->name('nivelescolaridad.index');
    Route::get('/nivelescolaridad-app/create', [NivelescolaridadController::class, 'create'])->name('nivelescolaridad.create');
    Route::post('/nivelescolaridad-app', [NivelescolaridadController::class, 'store'])->name('nivelescolaridad.store');
    Route::get('/nivelescolaridad-app/{nivelescolaridad}', [NivelescolaridadController::class, 'show'])->name('nivelescolaridad.show');
    Route::get('/nivelescolaridad-app/{nivelescolaridad}/edit', [NivelescolaridadController::class, 'edit'])->name('nivelescolaridad.edit');
    Route::patch('/nivelescolaridad-app/{nivelescolaridad}', [NivelescolaridadController::class, 'update'])->name('nivelescolaridad.update');
    Route::delete('/nivelescolaridad-app/{nivelescolaridad}', [NivelescolaridadController::class, 'destroy'])->name('nivelescolaridad.destroy');

    Route::get('/rangobeneficioconsolidadoasignado-app', [RangobeneficioconsolidadoasignadoController::class, 'index'])->name('rangobeneficioconsolidadoasignado.index');
    Route::get('/rangobeneficioconsolidadoasignado-app/create', [RangobeneficioconsolidadoasignadoController::class, 'create'])->name('rangobeneficioconsolidadoasignado.create');
    Route::post('/rangobeneficioconsolidadoasignado-app', [RangobeneficioconsolidadoasignadoController::class, 'store'])->name('rangobeneficioconsolidadoasignado.store');
    Route::get('/rangobeneficioconsolidadoasignado-app/{rango}', [RangobeneficioconsolidadoasignadoController::class, 'show'])->name('rangobeneficioconsolidadoasignado.show');
    Route::get('/rangobeneficioconsolidadoasignado-app/{rango}/edit', [RangobeneficioconsolidadoasignadoController::class, 'edit'])->name('rangobeneficioconsolidadoasignado.edit');
    Route::patch('/rangobeneficioconsolidadoasignado-app/{rango}', [RangobeneficioconsolidadoasignadoController::class, 'update'])->name('rangobeneficioconsolidadoasignado.update');
    Route::delete('/rangobeneficioconsolidadoasignado-app/{rango}', [RangobeneficioconsolidadoasignadoController::class, 'destroy'])->name('rangobeneficioconsolidadoasignado.destroy');

    Route::get('/tipobeneficio-app', [TipobeneficioController::class, 'index'])->name('tipobeneficio.index');
    Route::get('/tipobeneficio-app/create', [TipobeneficioController::class, 'create'])->name('tipobeneficio.create');
    Route::post('/tipobeneficio-app', [TipobeneficioController::class, 'store'])->name('tipobeneficio.store');
    Route::get('/tipobeneficio-app/{tipobeneficio}', [TipobeneficioController::class, 'show'])->name('tipobeneficio.show');
    Route::get('/tipobeneficio-app/{tipobeneficio}/edit', [TipobeneficioController::class, 'edit'])->name('tipobeneficio.edit');
    Route::patch('/tipobeneficio-app/{tipobeneficio}', [TipobeneficioController::class, 'update'])->name('tipobeneficio.update');
    Route::delete('/tipobeneficio-app/{tipobeneficio}', [TipobeneficioController::class, 'destroy'])->name('tipobeneficio.destroy');

    Route::get('/tipodocumento-app', [TipodocumentoController::class, 'index'])->name('tipodocumento.index');
    Route::get('/tipodocumento-app/create', [TipodocumentoController::class, 'create'])->name('tipodocumento.create');
    Route::post('/tipodocumento-app', [TipodocumentoController::class, 'store'])->name('tipodocumento.store');
    Route::get('/tipodocumento-app/{tipodocumento}', [TipodocumentoController::class, 'show'])->name('tipodocumento.show');
    Route::get('/tipodocumento-app/{tipodocumento}/edit', [TipodocumentoController::class, 'edit'])->name('tipodocumento.edit');
    Route::patch('/tipodocumento-app/{tipodocumento}', [TipodocumentoController::class, 'update'])->name('tipodocumento.update');
    Route::delete('/tipodocumento-app/{tipodocumento}', [TipodocumentoController::class, 'destroy'])->name('tipodocumento.destroy');

    Route::get('/tipopoblacion-app', [TipopoblacionController::class, 'index'])->name('tipopoblacion.index');
    Route::get('/tipopoblacion-app/create', [TipopoblacionController::class, 'create'])->name('tipopoblacion.create');
    Route::post('/tipopoblacion-app', [TipopoblacionController::class, 'store'])->name('tipopoblacion.store');
    Route::get('/tipopoblacion-app/{tipopoblacion}', [TipopoblacionController::class, 'show'])->name('tipopoblacion.show');
    Route::get('/tipopoblacion-app/{tipopoblacion}/edit', [TipopoblacionController::class, 'edit'])->name('tipopoblacion.edit');
    Route::patch('/tipopoblacion-app/{tipopoblacion}', [TipopoblacionController::class, 'update'])->name('tipopoblacion.update');
    Route::delete('/tipopoblacion-app/{tipopoblacion}', [TipopoblacionController::class, 'destroy'])->name('tipopoblacion.destroy');

});

Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/asignarbeneficios-app/{asignarbeneficio}', [AsignarbeneficioController::class, 'show'])->name('asignarbeneficio.show');
    Route::get('/asignarbeneficios-app/{asignarbeneficio}/edit', [AsignarbeneficioController::class, 'edit'])->name('asignarbeneficio.edit');
    Route::patch('/asignarbeneficios-app/{asignarbeneficio}', [AsignarbeneficioController::class, 'update'])->name('asignarbeneficio.update');

    Route::post('/logout-app', [AuthController::class, 'logout'])->name('logout.app');
});
