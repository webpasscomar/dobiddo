@extends('adminlte::page')

@section('title', 'Editar Sector')

@section('content_header')
    <h1>Editar Sector</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('sectores.update', $sector) }}" method="POST">
                @csrf
                @method('PUT')

                @include('backend.sectors.form')

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Guardar
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Reset
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>

            </form>

        </div>
    </div>
@stop

@section('js')
    @include('sweetalert::alert')
@stop
