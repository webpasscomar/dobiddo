@extends('layouts.app')
@section('title', 'Nosotros')

@section('content')
    <div class="container-fluid">

        <div class="row gx-md-5 bg-white p-5">

            <div class="col-md-4 m-auto">
                <img src="{{ asset('img/escenas/08_Cocina noche_mod.png') }}" class="img-fluid" alt="Doing bidding simple">
                {{-- <img src="{{ asset('img/mensajes_frases/Mensaje5.png') }}" class="img-fluid" alt="Doing bidding simple"> --}}
            </div>
            <div class="col-md-8 mt-5 mt-md-0">
                <p>
                    Somos un grupo de consultores (y amigos!) con distintas profesiones y trayectorias, que trabajamos de
                    manera free lance haciendo consultorías para los principales organismos internacionales de desarrollo y
                    ONGs.

                    Desde hace un tiempo, coincidimos en que muchas veces perdemos oportunidades por no disponer de tiempo
                    suficiente para la búsqueda. Sin embargo, la mayoría de las veces, las consultorías a las que postulamos
                    y pudimos desarrollar, nos llegaron compartidas a través de otros colegas y amigos.
                </p>
                <p>
                    Como a todo el mundo, nos atravesó la pandemia COVID 19 y muchos de nosotros tuvimos que repensar la
                    forma de encontrarnos para generar, con y entre pares, nuevas alternativas laborales en contextos de
                    aislamiento y de manera remota.
                </p>
                {{-- < class="col-md-4"> --}}
                <p>
                    La pandemia nos evidenció la relevancia de la creatividad e innovación
                    en socialización de conocimientos y tecnologías, que surgen en ámbitos de colaboración informal, con
                    especial énfasis en las redes y comunidades digitales.
                </p>
                <p>
                    Por eso nos juntamos, sumamos a otros colegas, compartimos mates y charlas a través de pantallas,
                    cientos de WhatsApp y correos a la semana con ideas (algunas pésimas, otras desafiantes), y pensamos que
                    no había mejor manera que replicar nuestra red, ya no solo limitada a nuestro grupo cercano sino para
                    todos los consultores en busca de nuevas oportunidades… por eso creamos dobiddo
                </p>
            </div>
        </div>
        <div class="p-5 d-flex flex-column flex-md-row justify-content-md-evenly justify-content-center align-items-center">
            <img src="{{ asset('img/mensajes_frases/Mensaje4-mod.png') }}" alt="making bids succeed"
                class="img-fluid mb-5 mb-md-0 about-makingBids">
            <img src="{{ asset('img/elementos/16_Zapatillas-mod.png') }}" alt="zapatillas" class="img-fluid about-slippers">
        </div>
    </div>
    {{-- <h1>Nosotros</h1>
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
        <h3>Así nació dobiddo</h3> --}}
@endsection
