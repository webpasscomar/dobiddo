@extends('adminlte::page')

@section('metaTitle', 'Dashboard')

@section('content_header')
  <h1>Dashboard</h1>
@stop

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
            <h1>Bienvenid@, {{ $user->name }}!</h1>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
