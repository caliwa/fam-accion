@extends('layouts.app')

@section('template_title')
    Asignarbeneficio
@endsection

@php
    $success = isset($success) ? $success : null;
@endphp

@section('content')
    @livewire('asignar-beneficio-component', ['success' => $success])
@endsection