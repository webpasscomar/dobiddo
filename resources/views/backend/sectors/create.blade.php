@extends('adminlte::page')

@section('title', 'Crear Sector')

@section('content_header')
  <h1>Crear Sector</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      <form action="{{ route('sectores.store') }}" method="POST">
        @csrf
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
  <script>
    @if ($errors->any())
      Swal.fire({
        icon: 'error',
        title: 'Errores en el formulario',
        html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
      });
    @endif
  </script>
  <script src="{{ asset('vendor/ckeditor5/ckeditor.js') }}"></script>
  <script>
    ClassicEditor.create(document.querySelector('#detalle')).catch(error => console.error(error));
  </script>
@stop
