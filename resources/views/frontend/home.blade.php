@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
    {{-- Mapa y descripción del sitio --}}
    <div class="container-fluid py-5 background_home_map">
        <div class="container text-white">

            <div class="row">

                <div class="col-md-6">
                    <p class="fs-4">
                        Como la mayoría de los consultores de hoy, seguramente te estás perdiendo de muchas
                        oportunidades.<br> </br>

                        Hay más de 20 plataformas de convocatorias en las que se actualizan semanalmente decenas de
                        oportunidades. <br> </br>
                        Solo los organismos internacionales publican más de 20 convocatorias de consultoría
                        por semana solamente para América Latina y el Caribe.
                        <br> </br>
                        Somos un grupo de consultores apoya a la comunidad de consultores a encontrar las oportunidades de
                        forma simple y fácil.
                        <br> </br>
                        Como sabemos que visitar todos los portales lleva mucho tiempo creamos dobiddo para que encuentres
                        todas las oportunidades en un solo lugar
                    </p>
                </div>

                <div class="col-md-6">
                    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
                    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                    <div id="map" style="width: 100%; height: 650px;" class="rounded-3"></div>

                    <script>
                        var countriesWithCalls = @json($countriesWithCalls);
                        // Initialize the map
                        var map = L.map('map', {
                            minZoom: 2 // Establecer nivel minimo de zoom en 2 para que no se vean zonas sin mapa
                        }).setView([-5, -80], 3);

                        // Set up the OSM layer
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        // Establecer límites de desplazamiento para que no se vean zonas sin mapa
                        let southWest = L.latLng(-90, -180);
                        let northEast = L.latLng(90, 180);

                        let bounds = L.latLngBounds(southWest, northEast);
                        map.setMaxBounds(bounds);

                        map.on('drag', function() {
                            map.panInsideBounds(bounds, {
                                animate: false
                            });
                        });

                        // Add the countries with calls to the map
                        countriesWithCalls.forEach(function(country) {
                            var marker = L.marker([country.lat, country.lon]).addTo(map);
                            // Popup para mostrar convocatorias por país
                            marker.bindPopup(`
                                  <b>${country.name}</b><br>
                                  ${country.calls_count} convocatorias activas<br>
                                  <a href="/calls/country/${country.id}">Ver convocatorias</a>
                              `);
                            // Mostrar popup al hacer hover sobre el país
                            marker.on('mouseover', function() {
                                this.openPopup();
                            });

                            // cerrar popup luego de 4 segundos al dejar de hacer hover
                            marker.on('mouseout', function() {
                                setTimeout(() => {
                                    this.closePopup();
                                }, 4000);
                            });
                        });
                    </script>
                </div>

            </div>

        </div>
    </div>

    {{-- enlaces Organismos y Consultores --}}
    <div class="container">

        <div class="row">

            <div class="col-lg-6 text-center my-4">
                <div class="p-4 m-4 shadow bg-light rounded-3">
                    <h2>¿Eres un Organismo?</h2>
                    <p class="lead fs-6">Contacta con nosotros si deseas publicar convocatorias.</p>
                    <a href="{{ route('institutions') }}" class="btn text-white btn-lg btn_institutions-submit">Publicar
                        Convocatorias</a>
                </div>
            </div>

            <div class="col-lg-6 text-center my-4">
                <div class="p-4 m-4 shadow bg-light rounded-3">
                    <h2>¿Eres un Consultor?</h2>
                    <p class="lead fs-6">Sumate a la Comunidad</p>
                    <a href="{{ route('consultans') }}" class="btn btn-lg btn_consultants-submit">Recibir
                        Convocatorias</a>
                </div>
            </div>

        </div>
    </div>

    {{-- Imágenes --}}

    <div class="container-fluid home_images">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/mensajes_frases/Mensaje1.png') }}" class="img-fluid" alt="Doing bidding simple"
                    width="700">
            </div>

            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/home/home.png') }}" class="img-fluid" alt="Doing bidding simple">
            </div>
        </div>
    </div>
@endsection
