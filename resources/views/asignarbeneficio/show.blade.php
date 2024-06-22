@extends('layouts.app')

@section('template_title')
    {{ $asignarbeneficio->name ?? __('Show') . " " . __('Asignarbeneficio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        
                        @role('beneficiario')
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Panel Beneficiario</span>
                        </div>
                        @endrole

                        @role('admin')
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asignar beneficio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('asignarbeneficio.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                        @endrole
                    </div>

                    @role('beneficiario')
                    <div class="card">
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2 mb20">
                                        <strong>Cedula:</strong>
                                        {{ $asignarbeneficio->Cedula }}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <strong>Estado del beneficiario {{auth()->user()->nombre}}:</strong>
                                        <span class="badge {{ $asignarbeneficio->EstadoBeneficiario == 'ACTIVO' ? 'bg-success' : 'bg-danger' }}">
                                            {{ $asignarbeneficio->EstadoBeneficiario }}
                                        </span>
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <strong>Tipo de asignación de beneficio:</strong>
                                        {{ $asignarbeneficio->TipoAsignacionBeneficio }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2 mb20">
                                        <strong>Tipo de beneficio:</strong>
                                        {{ $asignarbeneficio->tipobeneficio->TipoBeneficio }}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <strong>Rango de beneficio consolidado asignado:</strong>
                                        {{ $asignarbeneficio->rangobeneficioconsolidadoasignado->RangoBeneficioConsolidadoAsignado }}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <strong>Código municipio atención:</strong>
                                        {{ $asignarbeneficio->municipio->NombreMunicipioAtencion }}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <strong>Cantidad de beneficiarios:</strong>
                                        {{ $asignarbeneficio->CantidadDeBeneficiarios }}
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-success" href="{{ route('asignarbeneficio.edit',auth()->user()->cedula) }}">
                                        <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                    </a>
                                </div>
                            </div>
                    
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success m-4">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    
                    @endrole

                    @role('admin')
                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Cedula:</strong>
                            {{ $asignarbeneficio->Cedula }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estadobeneficiario:</strong>
                            {{ $asignarbeneficio->EstadoBeneficiario }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipoasignacionbeneficio:</strong>
                            {{ $asignarbeneficio->TipoAsignacionBeneficio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idtipobeneficio:</strong>
                            {{ $asignarbeneficio->tipobeneficio->TipoBeneficio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idrangobeneficioconsolidadoasignado:</strong>
                            {{ $asignarbeneficio->rangobeneficioconsolidadoasignado->RangoBeneficioConsolidadoAsignado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Codigomunicipioatencion:</strong>
                            {{ $asignarbeneficio->municipio->NombreMunicipioAtencion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidaddebeneficiarios:</strong>
                            {{ $asignarbeneficio->CantidadDeBeneficiarios }}
                        </div>

                    </div>
                    @endrole
                </div>
            </div>
        </div>
    </section>
@endsection
