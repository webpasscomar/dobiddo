<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- {{-- fontawesome --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Consultores</title>
</head>

<body>
    <!-- {{-- header --}} -->
    <header class="sticky-top bg-light">
        <nav class="container-fluid navbar navbar-expand-lg bg-white py-0 menutop shadow">
            <div class="container">
                <a class="navbar-brand col-6 col-md-3" href="{{ route('home') }}" title="Home">
                    <!-- logo -->
                    <img src="{{ asset('img/logotipos/08 Logo claim izquierdo rojo.png') }}" width="180"
                        alt="Home" class="img-fluid float-left">
                </a>
            </div>
        </nav>
    </header>
    <!-- {{-- main --}} -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/email/dobiddo.jpg') }}" alt="imágen dobiddo" class="email_consultants-img">
            </div>
            <div class="col-md-6 g-md-5 g-lg-0 mt-5 mt-md-0">
                <p>Hola {{ Str::title($data['name']) }}!, ¡Ya sos parte de la comunidad dobiddo!</p>
                <p>Te damos la bienvenida y esperamos que dobiddo te resulte de mucha utilidad al momento de buscar
                    nuevas oportunidades y desafíos!</p>
                <p>Diariamente actualizamos el listado de convocatorias que se publican de manera oficial y podrás
                    acceder en un solo clic a los enlaces de cada llamado para que puedas continuar con el proceso
                    de postulación según los requisitos y procedimientos de cada organismo convocante.</p>
                <a href="#">¡Empezá ahora!</a>
                <p class="mt-3"><strong>Equipo dobiddo</strong></p>
                <p>info@dobiddo.com</p>
                <p>dobiddo.com</p>
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <img src="{{ asset('img/email/instagram.png') }}" alt="logo instagram" title="Instagram"
                        width="40">
                    <img src="{{ asset('img/email/linkedin.png') }}" alt="logo linkedin" title="Linkedin"
                        width="40">
                    <img src="{{ asset('img/email/dobiddo-dip.png') }}" alt="logo dobiddo" width="120"
                        title="dobiddo">
                </div>
            </div>
        </div>

        <div class="row mt-md-5">
            <div class="col-md-12 mt-5 mt-md-0">
                <p><strong>Nuestro trabajo se limita a difundir convocatorias e información de interés para la
                        comunidad de consultores.</strong></p>
                <p class="mt-5"><strong>dobiddo</strong> no participa en los procesos de postulación, siendo esta
                    instancia de
                    exclusiva responsabilidad del consultor y de los organismos según sus políticas de
                    selección y contratación.
                </p>
                <p><strong>dobiddo</strong> se compromete al cumplimiento de su obligación de secreto con respecto a
                    sus datos de carácter personal y a tratarlos con confidencialidad, así como a no
                    cederlos a terceros sin su previo consentimiento. Podrá ejercer en cualquier momento
                    sus derechos de acceso, rectificación y cancelación.
                </p>
            </div>
        </div>
    </div>
    <!-- {{-- footer logo --}} -->
    <div class="container-fluid text-center py-5 mt-5" style="background-color: #7ec5ec">
        <div class="row">
            <div class="col m-auto">
                <img src="{{ asset('img/logotipos/10 Logo claim centrado negro.png') }}" class="" width="200"
                    alt="dobiddo the bid doers">
            </div>
        </div>
    </div>
    <!-- {{-- footer térmninos / redes sociales --}} -->
    <div class="footer" style="background-color: #333">
        <div class="container py-4">
            <div class="row">
                <!-- contacto -->
                <div class="col-md-5 mb-3">
                    <p class="h6 fw-bold text-white">Contacto</p>

                    <p class="text-white"><a href="mailto: info@dobiddo.com" class="nav-link" target="_blank">Email:
                            info@dobiddo.com</a>
                    </p>

                </div>
                <!-- categorias -->
                <div class="col-md-5 mb-3">
                    <p class="h6 fw-bold text-white">Otros</p>
                    <ul class="list-unstyled text-white-50 light">
                        <li>
                            <a href="{{ route('policies') }}" class="text-decoration-none link-light"
                                title="Politicas de privacidad">Politicas de privacidad
                            </a>
                        </li>
                        <li>
                            <a href="https://webpass.com.ar" class="nav-link" target="_blank">Diseño y
                                Desarrollo</a> by WebPass
                        </li>
                    </ul>
                </div>
                <!-- redes -->
                <div class="col-md-2">
                    <p class="h6 fw-bold text-white">Nuestras redes</p>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                            <a href="mailto:info@dobiddo.com" class="text-decoration-none link-light"
                                title="Envianos un email"> <i class="fa-solid fa-envelope fs-5"></i> </a>
                        </li>
                        <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                            <a href="https://www.instagram.com/thebiddoers/" target="_blank"
                                class="text-decoration-none link-light" title="Nuestro Instagram"> <i
                                    class="fa-brands fa-instagram fs-5"></i> </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <p class="mt-5 fs-6">Enviamos este correo electrónico a
        <a href="mailto:{{ $data['email'] }}">
            {{ $data['email'] }}
        </a> desde
        <a href="mailto:no-reply@dobiddo.com">no-reply@dobiddo.com
        </a>.
    </p>
    <p>Si no desea seguir recibiendo información haga <a href="#" class="text-black">clic aquí</a>
    </p>
</body>

</html>







{{-- Se deja por si ocurren cambios solicitados por el cliente, en caso contrario, se elimina --}}

{{-- <!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Consultores</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="" alt="imágen dobiddo">
                </div>
                <div class="col-md-6">
                    <p>Hola</p>
                </div>
            </div>
        </div> --}}
{{-- <p>Hola {{ $data['name'] }} te damos la bienvenida a la Comunidad Dobiddo y te invitamos a...</p> --}}
{{-- <p>Datos del consultor:</p> --}}
{{-- Apellido --}}
{{-- <p>Apellido: {{ $data['lastname'] }}</p> --}}
{{-- Nombre --}}
{{-- <p>Nombre: {{ $data['name'] }}</p> --}}
{{-- Email --}}
{{-- <p>Email: {{ $data['email'] }}</p> --}}
{{-- Nacionalidad --}}
{{-- <p>Nacionalidad: {{ $data['nationality']['name'] }}</p> --}}
{{-- Residencia --}}
{{-- <p>País de Residencia: {{ $data['residence']['name'] }}</p> --}}
{{-- Educación --}}
{{-- <p>Nível Educativo: {{ $data['education']['name'] }}</p> --}}
{{-- Experiencia si no es null --}}
{{-- @if ($data['experience'])
            <p>Experiencia: {{ $data['experience'] }} años</p>
        @endif --}}
{{-- Linkedin si no es null --}}
{{-- @if ($data['linkedin'])
            <p>Linkedin: {{ $data['linkedin'] }} años</p>
        @endif --}}
{{-- Sectores de interés si no es null --}}
{{-- @if (count($sectors) !== 0)
            <p>Sectores de Interés:</p>
            <ul>
                @foreach ($sectors as $sector)
                    <li>{{ $sector['name'] }}</li>
                @endforeach
            </ul>
        @endif --}}
{{-- </body>

</html> --}}
