@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel Inicial - Familias en acción') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{$user->name}}
                    @role('admin')
                    {{ __(' bienvenido, estás en el menú principal de Familias en Acción') }}
                    @endrole
                    @role('beneficiario')
                    {{ __(' bienvenido, ya puedes gestionar tu beneficio asignado') }}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
