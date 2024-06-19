@extends('adminlte::page')

@section('title', 'Crear Sector')

@section('content_header')
  <h1>Crear Sector</h1>
@stop

@section('content')
  <form action="{{ route('sectores.store') }}" method="POST">
    @csrf
    @include('backend.sectors.form')
    <button type="submit" class="btn btn-success">Guardar</button>
  </form>
@stop

{{-- @section('js')
  @include('sweetalert::alert')
@stop --}}
