@extends('layouts.app')

@section('template_title')
    {{ $beneficiario->name ?? __('Show') . " " . __('Beneficiario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Beneficiario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('beneficiario.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idtipodocumento:</strong>
                            {{ $beneficiario->tipodocumento->TipoDocumento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Beneficiario:</strong>
                            {{ $beneficiario->Beneficiario . " CC:" . $beneficiario->id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Genero:</strong>
                            {{ $beneficiario->Genero }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Bancarizado:</strong>
                            {{ $beneficiario->Bancarizado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Discapacidad:</strong>
                            {{ $beneficiario->Discapacidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idetnia:</strong>
                            {{ $beneficiario->etnium->Etnia }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idnivelescolaridad:</strong>
                            {{ $beneficiario->nivelescolaridad->NivelEscolaridad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idtipopoblacion:</strong>
                            {{ $beneficiario->tipopoblacion->TipoPoblacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Rangoedad:</strong>
                            {{ $beneficiario->RangoEdad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Titular:</strong>
                            {{ $beneficiario->Titular }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
