@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-md-7">

        <h2>Organismos y ONGs</h2>

        <form action="{{ route('institutions') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="organismo" class="form-label">Organismo</label>
            <input type="text" class="form-control" id="organismo" name="organismo" required>
          </div>
          <div class="mb-3">
            <label for="nombreApellido" class="form-label">Nombre y Apellido</label>
            <input type="text" class="form-control" id="nombreApellido" name="nombreApellido" required>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

      </div>

      <div class="col-md-5 d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/escenas_mensajes/Escena_mensaje8.jpg') }}" class="img-fluid" alt="Doing bidding simple">
      </div>

    </div>
  </div>
@endsection
