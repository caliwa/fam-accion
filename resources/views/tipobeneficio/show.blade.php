@extends('layouts.app')

@section('template_title')
    {{ $tipobeneficio->name ?? __('Show') . " " . __('Tipobeneficio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipobeneficio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipobeneficio.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idtipobeneficio:</strong>
                            {{ $tipobeneficio->IdTipoBeneficio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipobeneficio:</strong>
                            {{ $tipobeneficio->TipoBeneficio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
