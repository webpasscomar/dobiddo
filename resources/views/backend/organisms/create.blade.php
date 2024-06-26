@extends('adminlte::page')

@section('title', 'Crear Organismo')

@section('content_header')
    <h1>Crear Organismo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('organismos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('backend.organisms.form')

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Guardar
                </button>
                <button type="reset" class="btn btn-secondary" id="btnReset">
                    <i class="fas fa-undo"></i> Reset
                </button>
                <a href="{{ route('organismos.index')}}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>
            </form>
        </div>
    </div>
@stop

@push('js')
    @include('sweetalert::alert')
    <script>
        @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Errores en el formulario',
            html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
        });
        @endif
    </script>
@endpush
