@extends('layouts.adminlte')

@section('title', 'Consultores')

@section('content_header_title', 'Admin')
@section('content_header_subtitle', 'Consultores')

@section('content_body')
    <div class="card">
        <div class="card-header text-right">
            <a href="{{ route('consultants.export') }}" class="btn btn-success mb-3"><i
                    class="fa-regular fa-file-excel mr-2"></i>Exportar datos</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="consultants-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Nacionalidad</th>
                            <th>Residencia</th>
                            <th>Educación</th>
                            <th>Experiencia</th>
                            <th>Linkedin</th>
                            <th style="min-width: 400px;">Sectores</th>
                            <th style="min-width: 150px;">Fecha de envio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consultants as $consultant)
                            <tr>
                                <td class="align-middle">{{ $consultant->id }}</td>
                                <td class="align-middle">{{ Str::title($consultant->name) }}</td>
                                <td class="align-middle">{{ Str::title($consultant->lastname) }}</td>
                                <td class="align-middle">{{ Str::title($consultant->email) }}</td>
                                <td class="align-middle">{{ Str::title($consultant->nationality->name) }}</td>
                                <td class="align-middle">{{ Str::title($consultant->residence->name) }}</td>
                                <td class="align-middle">{{ Str::title($consultant->education->name) }}</td>
                                <td class="align-middle">{{ $consultant->experience }}</td>
                                <td class="align-middle">{{ $consultant->linkedin }}</td>
                                <td class="align-middle">
                                    <ul>
                                        @forelse($consultant->sectors as $sector)
                                            <li>{{ $sector->name }}</li>
                                        @empty
                                            <li>no hay sectores de interés</li>
                                        @endforelse
                                    </ul>
                                </td>
                                <td class="align-middle">{{ $consultant->created_at->format('d-m-Y') }}</td>

                                {{--            <td class="text-right align-middle" style="white-space: nowrap;"> --}}
                                {{--              <a href="{{ route('organismos.edit', $organism) }}" class="btn btn-warning btn-sm"> --}}
                                {{--                <i class="fas fa-edit"></i> --}}
                                {{--              </a> --}}
                                {{--              <form action="{{ route('organismos.destroy', $organism) }}" method="POST" --}}
                                {{--                    class="form-delete" style="display:inline;" enctype="multipart/form-data"> --}}
                                {{--                @csrf --}}
                                {{--                @method('DELETE') --}}
                                {{--                <button type="submit" class="btn btn-danger btn-sm"> --}}
                                {{--                  <i class="fas fa-trash-alt"></i> --}}
                                {{--                </button> --}}
                                {{--              </form> --}}
                                {{--            </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@stop

@push('js')
    {{--  Cargado provisorio de sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#consultants-table').DataTable({
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

        // document.querySelectorAll('.form-delete').forEach(form => {
        //   form.addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     Swal.fire({
        //       title: '¿Estás seguro?',
        //       text: "¡No podrás revertir esto!",
        //       icon: 'warning',
        //       showCancelButton: true,
        //       confirmButtonColor: '#3085d6',
        //       cancelButtonColor: '#d33',
        //       confirmButtonText: 'Sí, eliminarlo!'
        //     }).then((result) => {
        //       if (result.isConfirmed) {
        //         console.log('Preconfirm ejecutado');
        //         this.submit();
        //       }
        //     });
        //   });
        // });
    </script>

    @include('sweetalert::alert')
    {{--     @include('components.confirm_delete') --}}
@endpush
