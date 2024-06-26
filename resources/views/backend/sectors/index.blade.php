@extends('adminlte::page')

@section('title', 'Sectores')

@section('content_header')
  <h1>Sectores</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header text-right">
      <a href="{{ route('sectores.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Crear
        Sector</a>
    </div>
    <div class="card-body">
      <table id="sectores-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sectores as $sector)
            <tr>
              <td>{{ $sector->id }}</td>
              <td>{{ $sector->name }}</td>
              <td>{{ $sector->status == 1 ? 'Activo' : 'Inactivo' }}</td>
              <td class="text-right" style="white-space: nowrap;">
                <a href="{{ route('sectores.edit', $sector) }}" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('sectores.destroy', $sector) }}" method="POST" class="form-delete"
                  style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop

@section('js')
  <script>
    $(function() {
      $('#sectores-table').DataTable({
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
  {{-- @include('components.confirm_delete') --}}
@stop