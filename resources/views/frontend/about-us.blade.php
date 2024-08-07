@extends('layouts.app')
@section('title', 'Nosotros')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-md-5 d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/escenas_mensajes/Escena_mensaje7.jpg') }}" class="img-fluid" alt="Doing bidding simple">
        {{-- <img src="{{ asset('img/mensajes_frases/Mensaje5.png') }}" class="img-fluid" alt="Doing bidding simple"> --}}
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6">
        <h1>Nosotros</h1>
        <p>Somos una comunidad de consultores (y amigos!) con distintas profesiones y trayectorias, que trabajamos de manera free lance 
        haciendo consultorías para los principales organismos internacionales de desarrollo y ONGs. </p>
        <p>
          Desde hace un tiempo, coincidimos en que muchas veces perdemos oportunidades por no disponer de tiempo suficiente para la búsqueda. 
          Sin embargo, la mayoría de las veces, las consultorías a las que postulamos y pudimos desarrollar, nos llegaron compartidas a través de otros colegas y amigos.</p>
        <p>
          Gestando la comunidad…  </p>
        <p>
        Como a todo el mundo, nos atravesó la pandemia COVID 19 y muchos de nosotros tuvimos que repensar la forma de <b>encontrarnos</b> para generar,<b> con y entre pares</b>, nuevas 
        alternativas laborales en contextos de aislamiento y de manera remota.  La pandemia nos evidenció la relevancia de la creatividad e innovación en socialización de 
        conocimientos y tecnologías, que surgen en ámbitos de colaboración informal, con especial énfasis en las redes y comunidades digitales.</p>
        <p>
        Por eso nos juntamos, sumamos a otros colegas, compartimos mates y charlas a través de pantallas, cientos de WhatsApp y correos a la semana con ideas (algunas pésimas,
        otras desafiantes), y pensamos que no había mejor manera que replicar nuestra red, ya no solo limitada a nuestro grupo cercano sino para todos los consultores en busca
        de nuevas oportunidades.</p>
        
        <p> Aprendimos alguna vez que todo vuelve… y cuando la comunidad se hace grande, vuelve multiplicado. </p>
        <h3>Así nació dobiddo</h3>
      </div>
    </div>
  </div>
@endsection
