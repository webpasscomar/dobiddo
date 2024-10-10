<!-- Encabezado sticky -->
<header class="sticky-top bg-light">
  <nav class="container-fluid navbar navbar-expand-lg bg-white py-0 menutop shadow">
    <div class="container-md">

      <a class="navbar-brand col-6 col-md-3 col-lg-3" href="{{ route('home') }}" title="Home">
        <!-- logo -->
        <img src="{{ asset('img/logo-2.png') }}" width="140" alt="Home" class="img-fluid float-left">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Opciones de navegación -->
          <li class="nav-item {{ request()->routeIS('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" title="Home" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item {{ request()->routeIS('about-us') ? 'active' : '' }}">
            <a href="{{ route('about-us') }}" title="Home" class="nav-link">Nosotros</a>
          </li>
          <li class="nav-item {{ request()->routeIS('company') ? 'active' : '' }}">
            <a href="{{ route('company') }}" title="company" class="nav-link">Que hacemos</a>
          </li>
          <li
            class="nav-item {{ request()->routeIS('calls') || request()->routeIs('calls.detail') || request()->routeIS('calls.country') ? 'active' : '' }}">
            <a href="{{ route('calls') }}" title="calls" class="nav-link">Convocatorias</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
</header>

<!-- Agrega los estilos personalizados -->
<style>
  .navbar {
    background-color: #000000;
    /* Fondo negro para el header */
  }

  .navbar-nav .nav-link {
    color: #000000;
    font-size: 1.1rem;
    padding: 20px;
    border-left: 1px #cccccc solid;
  }

  .navbar-nav .nav-link:hover {
    color: #ff0000;
    /* Amarillo en el hover */
  }

  .navbar-nav .nav-item.active .nav-link {
    background-color: #e9624f;
    /* Fondo amarillo para el enlace activo */
    color: #ffffff;
    font-weight: bold;
    /* Letra blanca para el enlace activo */
    /* border-radius: 0.25rem; */
  }

  .btn-warning {
    color: #000000;
    /* Botón con color de fondo de advertencia y letra negra */
    border-color: #ff0000;
  }

  .btn-warning:hover {
    background-color: #ffca2c;
    border-color: #ffbf00;
  }
</style>
