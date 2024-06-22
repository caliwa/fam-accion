@extends('layouts.app')

@section('template_title')
    {{ $departamento->name ?? __('Show') . " " . __('Departamento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('departamento.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Codigodepartamentoatencion:</strong>
                            {{ $departamento->CodigoDepartamentoAtencion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombredepartamentoatencion:</strong>
                            {{ $departamento->NombreDepartamentoAtencion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
