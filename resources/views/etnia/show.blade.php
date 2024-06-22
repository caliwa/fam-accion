@extends('layouts.app')

@section('template_title')
    {{ $etnium->name ?? __('Show') . " " . __('Etnium') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Etnium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('etnia.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idetnia:</strong>
                            {{ $etnium->IdEtnia }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Etnia:</strong>
                            {{ $etnium->Etnia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
