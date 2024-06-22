@extends('layouts.app')

@section('template_title')
    {{ $rangobeneficioconsolidadoasignado->name ?? __('Show') . " " . __('Rangobeneficioconsolidadoasignado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rangobeneficioconsolidadoasignado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rangobeneficioconsolidadoasignado.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idrangobeneficioconsolidadoasignado:</strong>
                            {{ $rangobeneficioconsolidadoasignado->IdRangoBeneficioConsolidadoAsignado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Rangobeneficioconsolidadoasignado:</strong>
                            {{ $rangobeneficioconsolidadoasignado->RangoBeneficioConsolidadoAsignado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
