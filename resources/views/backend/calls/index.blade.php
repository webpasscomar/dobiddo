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
        @foreach ($calls as $call)
          <tr>
            <td class="align-middle">{{ $call->id }}</td>
            <td class="align-middle">{{ ucfirst($call->name) }}</td>
            <td class="align-middle">{{ $call->state->name }}</td>
            <td class="align-middle">{{ $call->institution->initial }}</td>
            <td class="align-middle">{{ $call->expiration }}</td>
            <td class="align-middle">{{ $call->publish }}</td>
            <td class="text-right align-middle" style="white-space: nowrap;">
              <button data-bs-toggle="modal" data-bs-target="#sectorModal{{$call->id}}" class="btn btn-secondary btn-sm" title="sectores">
                <i class="fas fa-graduation-cap"></i>
              </button>
              <button href="" class="btn btn-primary btn-sm" title="">
                <i class="far fa-eye"></i>
              </button>
              <a href="{{ route('convocatorias.edit', $call) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
              </a>
{{--              <form action="{{ route('convocatorias.destroy', $call) }}" method="POST" class="form-delete"--}}
{{--                    style="display:inline;" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" class="btn btn-danger btn-sm">--}}
{{--                  <i class="fas fa-trash-alt"></i>--}}
{{--                </button>--}}
{{--              </form>--}}
            </td>
          </tr>


{{--      Modal Areas /  Sectores--}}
          <!-- Modal -->
          <div class="modal fade" id="sectorModal{{$call->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable h-100">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title fs-5" id="exampleModalLabel">Seleccionar Incumbencias</h3>
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body h-100">
                  <form action="{{route('convocatorias.updateSectors', $call)}}" method="post" id="form{{$call->id}}">
                    @csrf
                    @method('PATCH')
                    <select name="sectors[]" id="" class="form-control h-100" multiple>
                      @foreach($sectors as $sector)
                        <option value="{{$sector->id}}" @selected(in_array($sector->id, $call->sectors->pluck('id')->toArray()))>{{$sector->name}}</option>
                      @endforeach
                    </select>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button onclick="changeSectors({{$call->id}})" class="btn btn-primary">Guardar cambios</button>
                </div>
              </div>
            </div>
          </div>
      {{--  Fin de modal       --}}

        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop

@section('js')
  {{-- cargado provisorio de boostrap script   --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

    // actualizar sectores de las convocatorias
    const changeSectors = (id) => {
      const form = document.querySelector(`#form${id}`);
      form.submit();
    };

  </script>

  @include('sweetalert::alert')
  {{--     @include('components.confirm_delete')--}}
@stop

