@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

  <div class="container">

    <div class="row">

      <div class="col-md-6">
        <h1 class="fs-2">¿Sabes cuántas convocatorias a consultorías se publican semanalmente?</h1>
        <br>
        <p class="fs-4">
          No es sorprendente que hayas perdido una buena oportunidad ya que, tan solo entre los principales organismos
          internacionales, encontramos más de 20 plataformas de convocatorias que publican decenas de licitaciones por
          semana para países de Latinoamérica y el Caribe!</p>
        <p class="fs-4">
          Visitar todos los portales lleva mucho tiempo y es por eso que creamos dobiddo para que encuentres todas las
          oportunidades en un solo lugar.
        </p>
        <br>
        <h3>We make it simple, digital, friendly & smart.</h3>

      </div>

      <div class="col-md-6">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        <div id="map" style="width: 100%; height: 650px;"></div>

        <script>
          var countriesWithCalls = @json($countriesWithCalls);
          // Initialize the map
          var map = L.map('map').setView([-5, -80], 3);

          // Set up the OSM layer
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);

          // Add the countries with calls to the map
          countriesWithCalls.forEach(function(country) {
            var marker = L.marker([country.lat, country.lon]).addTo(map);
            marker.bindPopup(`
            <b>${country.name}</b><br>
            ${country.calls_count} convocatorias activas<br>
            <a href="/calls/country/${country.id}">Ver convocatorias</a>
        `);
          });
        </script>
        {{-- <script>
          var map = L.map('map').setView([20, 0], 2);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
          }).addTo(map);

          var convocatorias = [{
              "pais": "Argentina",
              "lat": -34.6118,
              "lng": -58.4173
            },
            {
              "pais": "Australia",
              "lat": -25.2744,
              "lng": 133.7751
            },
            {
              "pais": "Brasil",
              "lat": -14.2350,
              "lng": -51.9253
            },
            {
              "pais": "Canadá",
              "lat": 56.1304,
              "lng": -106.3468
            },
            {
              "pais": "Chile",
              "lat": -35.6751,
              "lng": -71.5430
            },
            {
              "pais": "China",
              "lat": 35.8617,
              "lng": 104.1954
            },
            {
              "pais": "Colombia",
              "lat": 4.5709,
              "lng": -74.2973
            },
            {
              "pais": "Egipto",
              "lat": 26.8206,
              "lng": 30.8025
            },
            {
              "pais": "Francia",
              "lat": 46.6034,
              "lng": 1.8883
            },
            {
              "pais": "Alemania",
              "lat": 51.1657,
              "lng": 10.4515
            },
            {
              "pais": "India",
              "lat": 20.5937,
              "lng": 78.9629
            },
            {
              "pais": "Indonesia",
              "lat": -0.7893,
              "lng": 113.9213
            },
            {
              "pais": "Italia",
              "lat": 41.8719,
              "lng": 12.5674
            },
            {
              "pais": "Japón",
              "lat": 36.2048,
              "lng": 138.2529
            },
            {
              "pais": "México",
              "lat": 23.6345,
              "lng": -102.5528
            },
            {
              "pais": "Nigeria",
              "lat": 9.0820,
              "lng": 8.6753
            },
            {
              "pais": "Pakistán",
              "lat": 30.3753,
              "lng": 69.3451
            },
            {
              "pais": "Perú",
              "lat": -9.1899,
              "lng": -75.0152
            },
            {
              "pais": "Rusia",
              "lat": 61.5240,
              "lng": 105.3188
            },
            {
              "pais": "Sudáfrica",
              "lat": -30.5595,
              "lng": 22.9375
            },
            {
              "pais": "Corea del Sur",
              "lat": 35.9078,
              "lng": 127.7669
            },
            {
              "pais": "España",
              "lat": 40.4637,
              "lng": -3.7492
            },
            {
              "pais": "Turquía",
              "lat": 38.9637,
              "lng": 35.2433
            },
            {
              "pais": "Reino Unido",
              "lat": 55.3781,
              "lng": -3.4360
            },
            {
              "pais": "Estados Unidos",
              "lat": 37.0902,
              "lng": -95.7129
            },
            {
              "pais": "Venezuela",
              "lat": 6.4238,
              "lng": -66.5897
            }
          ];

          convocatorias.forEach(function(convocatoria) {
            L.marker([convocatoria.lat, convocatoria.lng]).addTo(map)
              .bindPopup('<b>' + convocatoria.pais + '</b>');
          });
        </script> --}}
      </div>

    </div>

  </div>


  <div class="container">

    <div class="row">

      <div class="col-md-6 text-center my-4">
        <div class="p-4 m-4 shadow bg-light rounded-3">
          <h2>¿Eres un Organismo?</h2>
          <p class="lead">Contacta con nosotros si deseas publicar convocatorias.</p>
          <a href="{{ route('institutions') }}" class="btn btn-primary btn-lg">Publicar Convocatorias</a>
        </div>
      </div>

      <div class="col-md-6 text-center my-4">
        <div class="p-4 m-4 shadow bg-light rounded-3">
          <h2>¿Eres un Consultor?</h2>
          <p class="lead">Regístrate para recibir convocatorias directamente en tu correo.</p>
          <a href="{{ route('consultans') }}" class="btn btn-success btn-lg">Recibir Convocatorias</a>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/mensajes_frases/Mensaje1.png') }}" class="img-fluid" alt="Doing bidding simple">
      </div>

      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/escenas/01_Aeropuerto.png') }}" class="img-fluid" alt="Doing bidding simple">
      </div>
    </div>



  </div>
@endsection
