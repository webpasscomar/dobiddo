<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1QRHS74HJ3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1QRHS74HJ3');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

  {{--  Font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Fonts -->
  {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
  {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

  <!-- Scripts -->
  @stack('head')
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>

<body style="background-color: #eeeee9">

  @include('layouts.partials.header')

  <div class="mt-4">

    @yield('content')

  </div>
  {{-- Sweet slert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @include('layouts.partials.footer')
  @include('sweetalert::alert')
  @stack('js')
</body>

</html>
