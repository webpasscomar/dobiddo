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
    </div>
    <div class="card-body">
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
            <td>{{ $sector->status }}</td>
            <td>
              <a href="{{ route('backend.sectores.edit', $sector) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('backend.sectores.destroy', $sector) }}" method="POST" style="display:inline;">
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
    $(document).ready(function() {
      $('#sectores-table').DataTable();
    });
    @include('sweetalert::alert')
    @include('components.confirm_delete')
  </script>
@stop
