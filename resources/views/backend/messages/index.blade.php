@extends('layouts.adminlte')

@section('title', 'Mensajes')
@section('content_header_title', 'Admin')
@section('content_header_subtitle', 'Mensajes')

@section('content_body')
    <div class="card">
        {{-- <div class="card-header text-right">
      <a href="{{ route('sectores.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Crear
          Sector</a>
  </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table id="messages-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="min-width:15rem;">Organismo</th>
                            <th style="min-width:15rem;">Nombre y Apellido</th>
                            <th>Email</th>
                            <th style="min-width: 5rem;">Mensaje</th>
                            <th style="max-width: 80px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ Str::title($message->organism) }}</td>
                                <td>{{ Str::title($message->fullName) }}</td>
                                <td>{{ $message->email }}</td>
                                <td>
                                    <!-- abrir modal mensajes -->
                                    <a href="" class="" data-bs-toggle="modal"
                                        data-bs-target="#message-{{ $message->id }}">
                                        Ver mensaje
                                    </a>
                                </td>
                                <td class="text-right" style="white-space: nowrap;">
                                    <form action="{{ route('messages.destroy', $message) }}" method="POST"
                                        class="form-delete" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal mensaje -->
                            <div class="modal fade" id="message-{{ $message->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="messageLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div style="background-color:rgba(0,0,0,0.20)" class="modal-header">
                                            <h1 class="modal-title fs-5" id="messageLabel">Mensaje</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $message->message }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Fin de modal --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

@push('js')
    {{-- cargado provisorio de boostrap script   --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{--  Cargado provisorio de sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#messages-table').DataTable({
                "stateSave": true,
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
@endpush
