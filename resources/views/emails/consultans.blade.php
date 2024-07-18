<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Consultores</title>
</head>
<body>
<h1>DobiDDo</h1>
<p>Hola {{$data['name']}} te damos la bienvenida a la Comunidad Dobiddo y te invitamos a...</p>
<p>Datos del consultor:</p>
{{--Apellido--}}
<p>Apellido: {{$data['lastname']}}</p>
{{--Nombre--}}
<p>Nombre: {{$data['name']}}</p>
{{--Email--}}
<p>Email: {{$data['email']}}</p>
{{--Nacionalidad--}}
<p>Nacionalidad: {{$data['nationality']['name']}}</p>
{{--Residencia--}}
<p>País de Residencia: {{$data['residence']['name']}}</p>
{{--Educación--}}
<p>Nível Educativo: {{$data['education']['name']}}</p>
{{--Experiencia si no es null--}}
@if($data['experience'])
  <p>Experiencia: {{$data['experience']}} años</p>
@endif
{{--Linkedin si no es null--}}
@if($data['linkedin'])
  <p>Linkedin: {{$data['linkedin']}} años</p>
@endif
{{--Sectores de interés si no es null--}}
@if(count($sectors) !== 0)
  <p>Sectores de Interés:</p>
  <ul>
    @foreach($sectors as $sector)
      <li>{{$sector['name']}}</li>
    @endforeach
  </ul>
@endif
</body>
</html>
