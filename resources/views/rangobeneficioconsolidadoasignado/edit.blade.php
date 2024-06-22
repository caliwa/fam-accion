@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Rangobeneficioconsolidadoasignado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Rangobeneficioconsolidadoasignado</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('rangobeneficioconsolidadoasignado.update', $rangobeneficioconsolidadoasignado->RangoBeneficioConsolidadoAsignado) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('rangobeneficioconsolidadoasignado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
