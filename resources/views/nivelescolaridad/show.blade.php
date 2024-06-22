@extends('layouts.app')

@section('template_title')
    {{ $nivelescolaridad->name ?? __('Show') . " " . __('Nivelescolaridad') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nivelescolaridad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('nivelescolaridad.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idnivelescolaridad:</strong>
                            {{ $nivelescolaridad->IdNivelEscolaridad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nivelescolaridad:</strong>
                            {{ $nivelescolaridad->NivelEscolaridad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
