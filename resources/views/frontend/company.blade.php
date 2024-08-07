@extends('layouts.app')
@section('title', 'Que hacemos')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-md-6">
        <h1>Que hacemos?</h1>
        <p>Brindamos información compartiendo los enlaces directos a convocatorias de los principales organismos de 
        desarrollo, Agencias de las Naciones Unidas, y ejecutores de proyectos de Organismos Gubernamentales y no Gubernamentales (ONG).
        </p>
        <p>
          Lo hacemos de manera democrática, transparente y accesible, poniendo  la información a disposición de manera simple a tantos consultores como sea posible. 
          Buscamos y compartimos en un solo lugar oportunidades de nuevos contratos de consultoría para individuos, empresas y ONG de LATAM y mantenemos al día a la
          comunidad de consultores en las últimas tendencias y requisitos del mercado
        </p>
        <p>
          Diariamente actualizamos las convocatorias oficialmente publicadas y podrás acceder en un solo clic a los enlaces oficiales de cada llamado para que puedas
          continuar con el proceso de postulación según los requisitos y procedimientos de cada organismo convocante.

        </p>
        <h3>We make it simple, digital, friendly & smart.</h3>
      </div>


      <div class="col-md-6 d-flex align-items-center justify-content-center p-40">
        <img src="{{ asset('img/mensajes_frases/Mensaje5.png') }}" class="img-fluid" alt="Doing bidding simple">
        {{-- <img src="{{ asset('img/escenas_mensajes/Escena_mensaje7.jpg') }}" class="img-fluid" alt="Doing bidding simple"> --}}
      </div>

    </div>
  </div>
@endsection
