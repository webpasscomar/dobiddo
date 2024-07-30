<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Organismos</title>
    </head>

    <body>
        <h1>Datos del postulante para publicar convocatorias</h1>
        <p>Organismo: {{ Str::title($data['organism']) }}</p>
        <p>Nombre y Apellido: {{ Str::title($data['fullName']) }}</p>
        <p>Correo: {{ $data['email'] }}</p>
        <p>Mensaje: {{ $data['message'] }}</p>
    </body>

</html>
