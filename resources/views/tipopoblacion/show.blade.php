@extends('layouts.app')

@section('template_title')
    {{ $tipopoblacion->name ?? __('Show') . " " . __('Tipopoblacion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipopoblacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipopoblacion.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idtipopoblacion:</strong>
                            {{ $tipopoblacion->IdTipoPoblacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipopoblacion:</strong>
                            {{ $tipopoblacion->TipoPoblacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
