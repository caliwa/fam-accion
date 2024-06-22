@extends('layouts.app')

@section('template_title')
    {{ $tipodocumento->name ?? __('Show') . " " . __('Tipodocumento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipodocumento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipodocumento.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idtipodocumento:</strong>
                            {{ $tipodocumento->IdTipoDocumento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipodocumento:</strong>
                            {{ $tipodocumento->TipoDocumento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
