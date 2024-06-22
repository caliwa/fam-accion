<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SOA') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'SOA') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        {{-- {{'Estado de autenticación sanctum: ' . auth()->user() }} --}}
                        @if(!auth()->user())
                            @if (Route::has('login.app'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('login.*') ? 'text-primary' : '' }}" href="{{ route('login.app') }}">{{ __('Logueo') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register.app'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('register.*') ? 'text-primary' : '' }}" href="{{ route('register.app') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            @role('beneficiario')
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('asignarbeneficio.*') ? 'text-primary' : '' }}" href="{{ route('asignarbeneficio.show',auth()->user()->cedula) }}">Ver Beneficio</a>
                            </li>
                            @endrole
                            @role('admin')
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('asignarbeneficio.*') ? 'text-primary' : '' }}" href="{{ route('asignarbeneficio.index') }}">Asignar Beneficio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('beneficiario.*') ? 'text-primary' : '' }}" href="{{ route('beneficiario.index') }}">Beneficiario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('departamento.*') ? 'text-primary' : '' }}" href="{{ route('departamento.index') }}">Departamento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('etnia.*') ? 'text-primary' : '' }}" href="{{ route('etnia.index') }}">Etnia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('municipio.*') ? 'text-primary' : '' }}" href="{{ route('municipio.index') }}">Municipio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('nivelescolaridad.*') ? 'text-primary' : '' }}" href="{{ route('nivelescolaridad.index') }}">Nivel Escolar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('rangobeneficioconsolidadoasignado.*') ? 'text-primary' : '' }}" href="{{ route('rangobeneficioconsolidadoasignado.index') }}">Rango Beneficio Consolidado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('tipobeneficio.*') ? 'text-primary' : '' }}" href="{{ route('tipobeneficio.index') }}">T. Beneficio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('tipodocumento.*') ? 'text-primary' : '' }}" href="{{ route('tipodocumento.index') }}">T. Documento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('tipopoblacion.*') ? 'text-primary' : '' }}" href="{{ route('tipopoblacion.index') }}">T. Población</a>
                            </li>
                            @endrole
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout.app') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir de la APP') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout.app') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
            
        </main>
    </div>
    @livewireScripts
</body>
</html>
