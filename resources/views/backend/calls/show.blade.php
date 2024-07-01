@extends('adminlte::page')

@section('title', 'Ver Convocatoria')

@section('content_header')
    <h1>Convocatoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            @include('backend.calls.form')

            <a href="{{ route('convocatorias.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Volver al listado
            </a>
        </div>
    </div>
@stop
