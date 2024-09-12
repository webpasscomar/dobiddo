@extends('layouts.app')
@section('title', 'Que hacemos')

@section('content')
    <div>
        <div class="container-fluid p-5 company_paris_background">
            <div class="row align-items-center justify-content-center gy-5 gy-md-0">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/escenas/paris-mod2.png') }}" class="img-fluid company_img-paris"
                        alt="Doing bidding simple">
                    {{-- <img src="{{ asset('img/escenas_mensajes/Escena_mensaje7.jpg') }}" class="img-fluid" alt="Doing bidding simple"> --}}
                </div>

                <div class="col-md-6">
                    {{-- <h1>Que hacemos?</h1> --}}
                    <p>Brindamos información compartiendo los enlaces directos a convocatorias de los principales organismos
                        de
                        desarrollo, Agencias de las Naciones Unidas, y ejecutores de proyectos de Organismos Gubernamentales
                        y
                        no Gubernamentales (ONG).
                    </p>
                    <p>
                        Lo hacemos de manera democrática, transparente y accesible, poniendo la información a disposición de
                        manera simple a tantos consultores como sea posible. Buscamos y compartimos en un solo lugar
                        oportunidades de nuevos contratos de consultoría para individuos, empresas y ONG de LATAM y
                        mantenemos
                        al día a la comunidad de consultores en las últimas tendencias y requisitos del mercado.
                    </p>
                    {{-- <p>
                    Lo hacemos de manera democrática, transparente y accesible, poniendo la información a disposición de
                    manera simple a tantos consultores como sea posible.
                    Buscamos y compartimos en un solo lugar oportunidades de nuevos contratos de consultoría para
                    individuos, empresas y ONG de LATAM y mantenemos al día a la
                    comunidad de consultores en las últimas tendencias y requisitos del mercado
                </p>
                <p>
                    Diariamente actualizamos las convocatorias oficialmente publicadas y podrás acceder en un solo clic a
                    los enlaces oficiales de cada llamado para que puedas
                    continuar con el proceso de postulación según los requisitos y procedimientos de cada organismo
                    convocante.

                </p>
                <h3>We make it simple, digital, friendly & smart.</h3> --}}
                </div>
            </div>
        </div>
        <div class="container-fluid p-5">
            <div class="row align-items-center my-5 gy-5 gy-md-0">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/mensajes_frases/Mensaje5_mod.png') }}" alt="Your partners in bidding"
                        class="img-fluid company_img-message">
                </div>
                <div class="col-md 6">
                    <p>
                        <strong>
                            Diariamente actualizamos las convocatorias oficialmente publicadas y podrás acceder en un solo
                            clic
                            a
                            los enlaces oficiales
                        </strong>
                        de cada llamado para que puedas continuar con el proceso de postulación según
                        los
                        requisitos y procedimientos de cada organismo convocante.
                    </p>
                    {{-- <h5 class="fw-bold">We make it simple, digital, friendly & smart.</h5> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
