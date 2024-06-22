@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('APP Familias en Acción - LOGIN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>El correo es obligatorio</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>La contraseña es obligatoria</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        @if(session('error_auth'))
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="alert alert-danger text-black my-2 rounded-lg text-sm p-2 text-center" role="alert">
                                            {{ session('error_auth') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="alert alert-success text-black my-2 rounded-lg text-sm p-2 text-center" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvídé mi Contraseña') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
