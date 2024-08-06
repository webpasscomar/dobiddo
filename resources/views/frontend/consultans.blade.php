@extends('layouts.app')
@section('title', 'Consultores')

@push('head')
    {{--  script recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>

    <script>
        document.addEventListener('submit', (e) => {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {
                    action: 'submit'
                }).then(function(token) {
                    let form = e.target;
                    let input = document.createElement('input');
                    input.type = "hidden";
                    input.name = "g-recaptcha-response";
                    input.value = token;

                    form.appendChild(input);
                    form.submit();
                });
            });
        });
    </script>
@endpush


@section('content')
    <div class="container">

        <div class="row">


            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/escenas_mensajes/Escena_mensaje5.jpg') }}" class="img-fluid"
                    alt="Doing bidding simple">
            </div>


            <div class="col-md-6">
                <h2>Consultores</h2>
                <p> 
                ¿Querés ser parte de la comunidad? ¡Nosotros queremos saber más de vos! Ayudanos a 
                perfilar tus búsquedas y a mantenerte informado de todas las novedades. Sumándote 
                a la comunidad dobiddo formarás parte del roster de consultores dobiddo y recibirás muchos consejos para postularte a los llamados de los principales organismos de desarrollo.
                </p>
                <p> <b> ¿Te sumas? </b></p>

                <form action="{{ route('consultans.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label">Apellido/s</label><span
                                class="text-danger ms-1">*</span>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ old('lastname' ?? '') }}">
                            @error('lastname')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nombre/s</label><span class="text-danger ms-1">*</span>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name' ?? '') }}">
                            @error('name')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label><span class="text-danger ms-1">*</span>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email' ?? '') }}">
                            @error('email')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirmEmail" class="form-label">Confirmación de Email</label><span
                                class="text-danger ms-1">*</span>
                            <input type="email" class="form-control" id="confirmEmail" name="confirmEmail"
                                value="{{ old('confirmEmail' ?? '') }}">
                            @error('confirmEmail')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nationalityCountry_id" class="form-label">Nacionalidad</label><span
                                class="text-danger ms-1">*</span>
                            <select class="form-select" id="nationalityCountry_id" name="nationalityCountry_id">
                                <option selected disabled>Seleccione ...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" @selected(old('nationalityCountry_id' ?? '') == $country->id)>{{ $country->name }}
                                    </option>
                                @endforeach
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                            @error('nationalityCountry_id')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="residenceCountry_id" class="form-label">País de Residencia</label><span
                                class="text-danger ms-1">*</span>
                            <select class="form-select" id="residenceCountry_id" name="residenceCountry_id">
                                <option selected disabled>Seleccione ...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" @selected(old('residenceCountry_id' ?? '') == $country->id)>{{ $country->name }}
                                    </option>
                                @endforeach
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                            @error('residenceCountry_id')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="education_id" class="form-label">Nivel Educativo Alcanzado</label><span
                                class="text-danger ms-1">*</span>
                            <select class="form-select" id="education_id" name="education_id">
                                <option value="" selected disabled>Seleccione ...</option>
                                @foreach ($educations as $education)
                                    <option value="{{ $education->id }}" @selected(old('education_id' ?? '') == $education->id)>
                                        {{ $education->name }}</option>
                                @endforeach
                                {{-- <option value="terciario">Terciario</option>
                <option value="universitario">Universitario</option>
                <option value="postgrado">Postgrado</option> --}}
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                            @error('education_id')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sectors" class="form-label">Sectores de Interés</label><span
                                class="text-danger ms-1">*</span>
                            <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Seleccionar una opción
                            </button>

                            <ul class="dropdown-menu dropdown_consultants" aria-labelledby="dropdownMenuButton">
                                @foreach ($sectors as $sector)
                                    <li class="dropdown-item"><label><input type="checkbox" name="sectors[]"
                                                class="align-middle me-2 item{{ $sector->id }}"
                                                value="{{ $sector->id }}"
                                                @checked(in_array($sector->id, old('sectors', [])))>{{ $sector->name }}
                                        </label></li>
                                @endforeach
                            </ul>

                            {{-- <select class="form-select" id="sectoresInteres" name="sectoresInteres" required>
                  <option value="" selected disabled>Seleccione ...</option>
                  <option value="tecnologia">Tecnología</option>
                  <option value="salud">Salud</option>
                  <option value="educacion">Educación</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select> --}}
                            @error('sectors')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="experience" class="form-label">Años de Experiencia</label><span
                                class="text-danger ms-1">*</span>
                            <input type="number" class="form-control" id="experience" name="experience" min="0"
                                value="{{ old('experience' ?? '') }}">
                            @error('experience')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fab fa-linkedin-in"></i></span>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    value="{{ old('linkedin') }}">
                            </div>
                            {{-- <label for="cv" class="form-label">Subir CV (Opcional)</label>
              <input type="file" class="form-control" id="cv" name="cv" accept=".pdf"> --}}
                            @error('linkedin')
                                <p class="ms-1 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col text-end">
                        <p class="text-require"><span class=" text-danger fs-6">*</span>Campos requeridos</p>
                    </div>
                    <div class="mt-2 mb-4">
                        @error('g-recaptcha-response')
                            <p class="ms-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>


        </div>
    </div>
@endsection
{{-- Script jquery para utilizar en app.js, es para evitar cierre de dropdown al hacer click dentro de el --}}
@push('js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    {{-- sweet alert - realrashid --}}
    @include('sweetalert::alert')
@endpush
