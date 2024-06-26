@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="row">


      <div class="col-md-6">
        <h1>Que hacemos?</h1>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el
          texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se
          dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro
          de textos especimen.
        </p>
        <p>
          No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando
          esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales
          contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus
          PageMaker, el cual incluye versiones de Lorem Ipsum.

          We implement a proposal developed from our experience in the world of consulting.</p>
        <p>
          Dobiddo is a platform that provides specialized support services in identifying consulting opportunities in the
          main international organizations.
        </p>
        <h3>We make it simple, digital, friendly & smart.</h3>
      </div>



      <div class="col-md-6 d-flex align-items-center justify-content-center p-40">
        <img src="{{ asset('img/escenas_mensajes/Escena_mensaje7.jpg') }}" class="img-fluid" alt="Doing bidding simple">
      </div>

    </div>
  </div>
@endsection
