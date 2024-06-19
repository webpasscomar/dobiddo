@extends('adminlte::page')

@section('title', 'Editar Sector')

@section('content_header')
  <h1>Editar Sector</h1>
@stop

@section('content')
  <form action="{{ route('backend.sectores.update', $sector) }}" method="POST">
    @csrf
    @method('PUT')
    @include('backend.sectores.form')
    <button type="submit" class="btn btn-success">Actualizar</button>
  </form>
@stop

@section('js')
  @include('sweetalert::alert')
@stop
