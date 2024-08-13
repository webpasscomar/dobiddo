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
        <title>Consultores</title>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('img/email/dobiddo.jpg') }}" alt="imágen dobiddo" class="w-100">
                </div>
                <div class="col-lg-6 fs-5 mt-5 mt-lg-0">
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
                        <img src="{{ asset('img/email/instagram.png') }}" alt="logo instagram" title="Instagram">
                        <img src="{{ asset('img/email/linkedin.png') }}" alt="logo linkedin" title="Linkedin">
                        <img src="{{ asset('img/email/dobiddo-dip.png') }}" alt="logo dobiddo" width="180"
                            title="dobiddo">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 fs-5 mt-5 mt-lg-0">
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
                    <p class="mt-5">Enviamos este correo electrónico a
                        <a href="mailto:{{ $data['email'] }}">
                            {{ $data['email'] }}
                        </a> desde
                        <a href="mailto:no-reply@dobiddo.com">no-reply@dobiddo.com
                        </a>.
                    </p>
                    <p>Si no desea seguir recibiendo información haga <a href="#" class="text-black">clic aquí</a>
                    </p>
                </div>
            </div>
        </div>
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
