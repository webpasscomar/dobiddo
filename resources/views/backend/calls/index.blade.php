@extends('adminlte::page')

@section('title', 'Convocatorias')

@section('content_header')
  <h1>Convocatorias</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header text-right">
      <a href="{{ route('convocatorias.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Crear
        Convocatoria</a>
    </div>
    <div class="card-body">
      <table id="calls-table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Estado</th>
          <th>Organismo</th>
          <th>Vencimiento</th>
          <th>Publicar</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach ($organisms as $organism)--}}
{{--          <tr>--}}
{{--            <td class="align-middle">{{ $organism->id }}</td>--}}
{{--            <td class="align-middle">{{ Str::title($organism->name) }}</td>--}}
{{--            <td class="align-middle">{{ Str::upper($organism->initial) }}</td>--}}
{{--            <td class="align-middle"><img src="{{$organism->logo && file_exists(public_path('storage/organismos/'.$organism->logo)) ? asset('storage/organismos/'.$organism->logo) : asset('img/imagen-no-disponible.jpg')}}" alt="{{$organism->name}}" width="40" height="40" style="object-fit: cover;"></td>--}}
{{--            <td class="align-middle">{{ $organism->status == 1 ? 'Activo' : 'Inactivo' }}</td>--}}
{{--            <td class="text-right align-middle" style="white-space: nowrap;">--}}
{{--              <a href="{{ route('organismos.edit', $organism) }}" class="btn btn-warning btn-sm">--}}
{{--                <i class="fas fa-edit"></i>--}}
{{--              </a>--}}
{{--              <form action="{{ route('organismos.destroy', $organism) }}" method="POST" class="form-delete"--}}
{{--                    style="display:inline;" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" class="btn btn-danger btn-sm">--}}
{{--                  <i class="fas fa-trash-alt"></i>--}}
{{--                </button>--}}
{{--              </form>--}}
{{--            </td>--}}
{{--          </tr>--}}
{{--        @endforeach--}}
        </tbody>
      </table>
    </div>
  </div>
@stop

@section('js')
  {{--  Cargado provisorio de sweetalert--}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {
      $('#calls-table').DataTable({
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
          "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "No se encontraron resultados",
          "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
          },
          "aria": {
            "sortAscending": ": activar para ordenar la columna en orden ascendente",
            "sortDescending": ": activar para ordenar la columna en orden descendente"
          }
        }
      });
    });

    document.querySelectorAll('.form-delete').forEach(form => {
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        Swal.fire({
          title: '¿Estás seguro?',
          text: "¡No podrás revertir esto!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
          if (result.isConfirmed) {
            console.log('Preconfirm ejecutado');
            this.submit();
          }
        });
      });
    });
  </script>

  @include('sweetalert::alert')
  {{--     @include('components.confirm_delete')--}}
@stop

