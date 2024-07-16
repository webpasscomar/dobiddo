@extends('layouts.app')
@section('title', 'Consultores')

@section('content')
    <div class="container">

        <div class="row">


            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/escenas_mensajes/Escena_mensaje5.jpg') }}" class="img-fluid"
                    alt="Doing bidding simple">
            </div>


            <div class="col-md-6">
                <h2>Consultores</h2>

                <form action="{{ route('consultans') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="apellido" class="form-label">Apellido/s</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre/s</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirmEmail" class="form-label">Confirmación de Email</label>
                            <input type="email" class="form-control" id="confirmEmail" name="confirmEmail" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nacionalidad" class="form-label">Nacionalidad</label>
                            <select class="form-select" id="nacionalidad" name="nacionalidad" required>
                                <option value="" selected disabled>Seleccione ...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endforeach
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="paisResidencia" class="form-label">País de Residencia</label>
                            <select class="form-select" id="paisResidencia" name="paisResidencia" required>
                                <option value="" selected disabled>Seleccione ...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endforeach
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nivelEducativo" class="form-label">Nivel Educativo Alcanzado</label>
                            <select class="form-select" id="nivelEducativo" name="nivelEducativo" required>
                                <option value="" selected disabled>Seleccione ...</option>
                                @foreach ($educations as $education)
                                    <option value="{{ $education->name }}">{{ $education->name }}</option>
                                @endforeach
                                {{-- <option value="terciario">Terciario</option>
                                <option value="universitario">Universitario</option>
                                <option value="postgrado">Postgrado</option> --}}
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sectoresInteres" class="form-label">Sectores de Interés</label>
                            <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Seleccionar una opción</button>

                            <ul class="dropdown-menu dropdown_consultants" aria-labelledby="dropdownMenuButton">
                                @foreach ($sectors as $sector)
                                    <li><label for="sector{{ $sector->id }}" class="dropdown-item"><input type="checkbox"
                                                name="sectors[]" id="sector{{ $sector->id }}" class="align-middle me-2"
                                                value="{{ $sector->id }}">{{ $sector->name }}</label></li>
                                @endforeach
                            </ul>

                            {{-- <select class="form-select" id="sectoresInteres" name="sectoresInteres" required>
                                <option value="" selected disabled>Seleccione ...</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="salud">Salud</option>
                                <option value="educacion">Educación</option>
                                <!-- Agrega más opciones según sea necesario -->
                              </select> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="experiencia" class="form-label">Años de Experiencia</label>
                            <input type="number" class="form-control" id="experiencia" name="experiencia" min="0"
                                required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cv" class="form-label">Linkedin</label>

                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fab fa-linkedin-in"></i></span>
                                <input type="text" class="form-control">
                            </div>
                            {{-- <label for="cv" class="form-label">Subir CV (Opcional)</label>
                            <input type="file" class="form-control" id="cv" name="cv" accept=".pdf"> --}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>



        </div>
    </div>
@endsection
