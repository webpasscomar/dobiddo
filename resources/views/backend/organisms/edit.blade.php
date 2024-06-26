@extends('adminlte::page')

@section('title', 'Editar Organismo')

@section('content_header')
  <h1>Editar Organismo</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">

      <form action="{{ route('organismos.update', $organism) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('backend.organisms.form')

        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Guardar
        </button>
        <button type="reset" class="btn btn-secondary" id="btnResetEdit">
          <i class="fas fa-undo"></i> Reset
        </button>
        <a href="{{ route('organismos.index') }}" class="btn btn-secondary">
          <i class="fas fa-arrow-left"></i> Volver al listado
        </a>

      </form>

    </div>
  </div>
@stop

@push('js')
  @include('sweetalert::alert')
{{--  Si se resetea el formulario al editar muestra la foto que tenia--}}
  <script>
    const btnResetEdit = document.getElementById('btnResetEdit');
    btnResetEdit.addEventListener('click',() =>{
      imageContainer.innerHTML = '';
      imageContainer.innerHTML = `<img src="{{$organism->logo && file_exists(public_path('storage/organismos/'.$organism->logo)) ? asset('storage/organismos/'.$organism->logo) : asset('img/imagen-no-disponible.jpg')}}" alt="{{$organism->name}}" class="imagen">`;
    });
  </script>
{{-- Muestra los errores de validación del formulario --}}
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
