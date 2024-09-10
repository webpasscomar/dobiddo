@extends('layouts.app')
@section('title', 'Organismos')

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

        <div class="row gx-0 gx-md-5">

            <div class="col-md-5">

                <h2>Organismos</h2>
                <p>
                    Nuestra comunidad está conformada por miles de profesionales de América Latina y el Caribe que se
                    encuentran en proceso activo de búsqueda de proyectos y nuevas consultorías. A través de dobiddo te
                    ayudamos a difundir los llamados, alcanzando a muchos más consultores y empresas de las distintas
                    disciplinas y países, y a que los procesos de convocatoria sean mucho más competitivos y transparentes.
                </p>
                <div>
                    <img src="{{ asset('img/organismos/organismos.png') }}" class="img-fluid ms-0 ms-md-5"
                        alt="Doing bidding simple">
                </div>

            </div>
            <div class="col-md-7 {{ $errors->any() ? 'mb-5' : '' }}">
                {{-- <img src="{{ asset('img/escenas_mensajes/Escena_mensaje8.jpg') }}" class="img-fluid"
                    alt="Doing bidding simple"> --}}
                <form action="{{ route('institutions.store') }}" method="POST"
                    class="shadow-lg-responsive rounded-3 px-md-5 py-md-4">
                    @csrf
                    {{-- Organismo --}}
                    <div class="mb-4">
                        <label for="organism" class="form-label">Organismo</label><span class="ms-1 text-danger">*</span>
                        <input type="text" class="form-control" id="organism" name="organism"
                            value="{{ old('organism') ?? '' }}">
                        @error('organism')
                            <p class="ms-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- nombre - apellido --}}
                    <div class="mb-4">
                        <label for="fullName" class="form-label">Nombre y Apellido</label><span
                            class="ms-1 text-danger">*</span>
                        <input type="text" class="form-control" id="fullName" name="fullName"
                            value="{{ old('fullName') ?? '' }}">
                        @error('fullName')
                            <p class="ms-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- correo --}}
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo</label><span class="ms-1 text-danger">*</span>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') ?? '' }}">
                        @error('email')
                            <p class="ms-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- mensaje --}}
                    <div class="mb-4">
                        <label for="message" class="form-label">Mensaje</label><span class="ms-1 text-danger">*</span>
                        <textarea class="form-control" id="message" name="message" rows="4">{{ old('message') ?? '' }}</textarea>
                        @error('message')
                            <p class="ms-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- mensaje campos obligatorios --}}
                    <div class="col text-end">
                        <p class="text-require"><span class=" text-danger fs-6">*</span>Campos requeridos</p>
                    </div>
                    {{-- captcha --}}
                    <div class="mt-2 mb-4">
                        @error('g-recaptcha-response')
                            <p class="ms-1 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn_institutions-submit text-white">Enviar</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@push('js')
    {{-- sweet alert - realrashid --}}
    @include('sweetalert::alert')
@endpush
