@extends('layouts.app')


@section('template_title')
    {{ __('Create') }} Asignarbeneficio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Asignarbeneficio</span>
                    </div>
                    <div class="card-body bg-white">
                        
                        <form method="POST" action="{{ route('asignarbeneficio.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('asignarbeneficio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
