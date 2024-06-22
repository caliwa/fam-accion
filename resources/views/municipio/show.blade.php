@extends('layouts.app')

@section('template_title')
    {{ $municipio->name ?? __('Show') . " " . __('Municipio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Municipio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('municipio.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Codigomunicipioatencion:</strong>
                            {{ $municipio->CodigoMunicipioAtencion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombremunicipioatencion:</strong>
                            {{ $municipio->NombreMunicipioAtencion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Codigodepartamentoatencion:</strong>
                            {{ $municipio->departamento->NombreDepartamentoAtencion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
