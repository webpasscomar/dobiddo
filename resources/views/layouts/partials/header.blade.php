<!-- Encabezado sticky -->
<header class="sticky-top bg-light">
  <nav class="container-fluid navbar navbar-expand-lg bg-white py-0 menutop shadow">
    <div class="container-md">
      <a class="navbar-brand col-6 col-md-3 col-lg-3" href="{{ route('home') }}" title="Home">
        <!-- logo -->
        <img src="{{ asset('img/logo.png') }}" width="120" alt="Home" class="img-fluid float-left">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Opciones de navegación -->
          <li class="nav-item {{ request()->routeIS('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" title="Home" class="nav-link">Home</a>
          </li>
          <li class="nav-item {{ request()->routeIS('about-us') ? 'active' : '' }}">
            <a href="{{ route('about-us') }}" title="Home" class="nav-link">Nosotros</a>
          </li>
          <li class="nav-item {{ request()->routeIS('company') ? 'active' : '' }}">
            <a href="{{ route('company') }}" title="company" class="nav-link">Que hacemos</a>
          </li>
          <li class="nav-item {{ request()->routeIS('calls') ? 'active' : '' }}">
            <a href="{{ route('calls') }}" title="calls" class="nav-link">Convocatorias</a>
          </li>
          {{-- <li class="nav-item {{ request()->routeIS('institutions') ? 'active' : '' }}">
            <a href="{{ route('institutions') }}" title="institutions" class="nav-link">Organismos</a>
          </li>
          <li class="nav-item {{ request()->routeIS('consultans') ? 'active' : '' }}">
            <a href="{{ route('consultans') }}" title="consultans" class="nav-link">Consultores</a>
          </li> --}}

          <!-- Opciones de autenticación -->
          {{-- @guest
            <li class="nav-item">
              <a href="{{ route('login') }}" class="btn btn-primary"><span class="fas fa-sign-in-alt"></span>
                Ingresar</a>
            </li>
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/admin') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Salir
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest --}}


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
    /* Letra blanca para los enlaces */
    font-weight: bold;

  }

  .navbar-nav .nav-link:hover {
    color: #ff0000;
    /* Amarillo en el hover */
  }

  .navbar-nav .nav-item.active .nav-link {
    background-color: #ff0000;
    /* Fondo amarillo para el enlace activo */
    color: #ffffff;
    /* Letra blanca para el enlace activo */
    border-radius: 0.25rem;
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
