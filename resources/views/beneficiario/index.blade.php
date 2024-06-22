@extends('layouts.app')

@role('admin')
    @section('template_title')
        Beneficiario
    @endsection

    @php
        $success = isset($success) ? $success : null;
    @endphp

    @section('content')
        @livewire('beneficiario-component', ['success' => $success])
    @endsection
@endrole