@extends('layouts.app')
@section('title', 'Convocatorias - Detalle')

@push('head')
    <meta property="og:type" content="website">
    {{-- <meta property="og:url" content="{{ url()->current() }}"> --}}
    <meta property="og:title" content="{{ $call->name }}">
    <meta property="og:description" content="{{ $call->resume }}">
    <meta property="og:image" content="{{ asset('img/logotipos/08 Logo claim izquierdo rojo.png') }}">
@endpush

@section('content')
    <div class="container mb-4">
        <div class="card px-1 px-md-4 py-3 shadow-lg-responsive">
            {{-- Botones compartir redes sociales --}}
            <div class="d-none d-sm-block align-self-end my-3">
                <a role="button" class="calls_share" onclick="shareOnWhatsApp('{{ url()->current() }}')"
                    title="Compartir en Whatsapp">
                    {{-- <i class="fab fa-whatsapp"></i> --}}
                    <img src="{{ asset('img/social_media_iconos/whatsapp.png') }}" alt="whatsapp" width="30">
                </a>
                <a role="button" class="calls_share" onclick="shareByEmail('{{ url()->current() }}')"
                    title="Enviar por Correo">
                    {{-- <i class="fas fa-envelope"></i> --}}
                    <img src="{{ asset('img/social_media_iconos/mail.png') }}" alt="correo" width="30">
                </a>
                <a role="button" class="calls_share" onclick="shareOnTwitter('{{ url()->current() }}')"
                    title="Compartir Red social X (ex Twitter)">
                    {{-- <i class="fab fa-x-twitter"></i> --}}
                    <img src="{{ asset('img/social_media_iconos/Twitter.png') }}" alt="Red Social X" width="30">
                </a>
                <a role="button" class="calls_share" onclick="shareOnFacebook('{{ url()->current() }}')"
                    title="Compartir en Facebook">
                    {{-- <i class="fab fa-facebook"></i> --}}
                    <img src="{{ asset('img/social_media_iconos/facebook.png') }}" alt="Facebook" width="30">
                </a>
                <a role="button" class="calls_share" onclick="" title="Compartir en  Linkedin">
                    {{-- <i class="fab fa-facebook"></i> --}}
                    <img src="{{ asset('img/social_media_iconos/linkedin.png') }}" alt="Linkedin" width="30">
                </a>
                <a role="button" class="calls_share" onclick="copyClipboard('{{ url()->current() }}')"
                    title="Copiar al portapapeles">
                    {{-- <i class="fas fa-copy"></i> --}}
                    <img src="{{ asset('img/social_media_iconos/copy.png') }}" alt="copiar al portapapeles" width="30">
                </a>
                <!--                 <a role="button" class="calls_share"
                                                                                                                                                                                                                                        onclick="addToCalendar('{{ $call->name }}', '{{ $call->institution->name }}', '{{ $call->expiration }}')"
                                                                                                                                                                                                                                        title="Descargar archivo calendar">
                                                                                                                                                                                                                                        {{-- <i class="fas fa-calendar-plus"></i> --}}
                                                                                                                                                                                                                                        <img src="{{ asset('img/social_media_iconos/download.png') }}" alt="Descargar archivo calendar"
                                                                                                                                                                                                                                            width="30">
                                                                                                                                                                                                                                    </a> -->
            </div>
            {{-- fin botones compartir redes sociales --}}
            {{-- <a href="#" class="text-primary align-self-end" title="compartir"><i
                    class="fa-regular fa-share-from-square fs-5 align-middle"></i></a> --}}
            <div class="card-body">
                {{-- Imagen /nombre / extendido / compartir --}}
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                            <img src="{{ $call->institution->logo && file_exists(public_path('./storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                                alt="{{ $call->name }}" width="100" height="100" class="object-fit-cover">

                            <div class="d-flex flex-column">
                                <h1 class="fs-3 mt-4 mt-md-0">{{ $call->name }}</h1>
                                <h2 class="text-secondary fs-6">{{ $call->institution->name }}</h2>

                                {{--    botones país, formato, dedicación      --}}
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-outline-secondary"><img
                                                src="{{ asset('storage/flags/' . $call->country->flag) }}"
                                                alt="{{ $call->name }}" width="20" height="20"
                                                class="me-1">{{ $call->country->name }}</button>
                                        <button
                                            class="btn btn-sm btn_calls-dedication text-white">{{ $call->dedication->name }}</button>
                                        <button type="button"
                                            class="btn btn-sm btn_calls-format fw-semibold">{{ $call->format->name }}</button>
                                    </div>
                                </div>


                                <div class="d-flex align-items-center mt-2 column-gap-2">
                                    @if ($call->extended === 1)
                                        <button class="btn btn-secondary btn-sm btn-extended"><i
                                                class="fa-solid fa-tag align-middle me-1"></i>EXTENDIDO</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--      fecha expiracion      --}}
                    <div class ="col-12 col-lg-2 mt-3 mt-lg-0 text-end">
                        <span class="me-1">{{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</span>
                        {{-- Logo calendar - agregar a calendario --}}
                        <a href="{{ route('google.redirect', ['call_id' => $call->id]) }}" class="calls_share"
                            title="Agregar Calendar | {{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}">
                            {{-- <i class="fas fa-calendar-plus"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/schedule-circle.svg') }}"
                                alt="Google calendar - expiracion: {{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}"
                                width="40">
                        </a>
                    </div>
                </div>

                {{--    Resumen      --}}
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p class="fs-5">{!! $call->resume !!}</p>
                    </div>
                </div>

                {{--    Contenido      --}}
                <div class="row mt-3">
                    <div class="col-md-12">
                        <p class="fs-5">{!! $call->content !!}</p>
                    </div>
                </div>


                {{--    Mostrar Aclaración si hay contenido     --}}
                @if ($call->comment)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <p>Aclaración:</p>
                            <p>{{ $call->comment }}</p>
                        </div>
                    </div>
                @endif

                {{--   Mostrar Sectores si fueron seleccionados --}}
                @if (count($call->sectors) > 0)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <p>Sectores:</p>
                            <ul>
                                @foreach ($call->sectors as $sector)
                                    <li class="nav-link">
                                        <img src="{{ asset('img/elementos/check-circle.png') }}" alt="sectores"
                                            width="20" class="me-2">
                                        {{-- <i
                                        class="fa-solid fa-check align-middle fs-6 me-1 text-success"></i> --}}
                                        {{ $sector->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif


                {{--    link - URL      --}}
                <div class="row mt-4 align-items-center">
                    <div class="col-md-12 d-flex">
                        {{-- <p>Más Información: </p> --}}
                        <span class="">Más información:</span>
                        <a href="{{ $call->link }}" class="calls_share" target="_blank">
                            <img src="{{ asset('img/social_media_iconos/world-circle.svg') }}" alt="{{ $call->link }}"
                                width="25" class="ms-2" title="{{ $call->link }}">
                        </a>
                    </div>
                </div>

                <div>

                    {{-- Botones compartir redes sociales en versiones mobiles (celular) --}}
                    <div class="d-block d-sm-none align-self-end my-3 mt-5">
                        <p>Compartir la convocatoria por:</p>
                        <a role="button" class="calls_share" onclick="shareOnWhatsApp('{{ url()->current() }}')"
                            title="Compartir en Whatsapp">
                            {{-- <i class="fab fa-whatsapp"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/whatsapp-circle.svg') }}" alt="whatsapp"
                                width="30" class="m-1">
                        </a>
                        <a role="button" class="calls_share" onclick="shareByEmail('{{ url()->current() }}')"
                            title="Enviar por Correo">
                            {{-- <i class="fas fa-envelope"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/mail-circle.svg') }}" alt="correo"
                                width="30" class="m-1">
                        </a>
                        <a role="button" class="calls_share" onclick="shareOnTwitter('{{ url()->current() }}')"
                            title="Compartir Red social X (ex Twitter)">
                            {{-- <i class="fab fa-x-twitter"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/twitter-circle.svg') }}" alt="Red Social X"
                                width="30" class="m-1">
                        </a>
                        <a role="button" class="calls_share" onclick="shareOnFacebook('{{ url()->current() }}')"
                            title="Compartir en Facebook">
                            {{-- <i class="fab fa-facebook"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/facebook-circle.svg') }}" alt="Facebook"
                                width="30" class="m-1">
                        </a>
                        <a role="button" class="calls_share" onclick="" title="Compartir en Instagram">
                            {{-- <i class="fab fa-facebook"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/instagram-circle.svg') }}" alt="Instagram"
                                width="30" class="m-1">
                        </a>
                        <a role="button" class="calls_share" onclick="" title="Compartir en Linkedin">
                            {{-- <i class="fab fa-facebook"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/linkedin-circle.svg') }}" alt="Linkedin"
                                width="30" class="m-1">
                        </a>
                        <a role="button" class="calls_share" id="btnCopyURL"
                            data-clipboard-text="{{ url()->current() }}" title="Copiar al portapapeles">
                            {{-- <i class="fas fa-copy"></i> --}}
                            <img src="{{ asset('img/social_media_iconos/copy-circle.svg') }}"
                                alt="copiar al portapapeles" width="30" class="m-1">
                        </a>
                        {{-- <a role="button" class="calls_share"
                            onclick="addToCalendar('{{ $call->name }}', '{{ $call->institution->name }}', '{{ $call->expiration }}')"
                            title="Descargar archivo calendar"> --}}
                        {{-- <i class="fas fa-calendar-plus"></i> --}}
                        {{-- <img src="{{ asset('img/social_media_iconos/download-circle.svg') }}"
                                alt="Descargar archivo calendar" width="30" class="m-1">
                        </a> --}}
                    </div>
                </div>

            </div>

            {{--    botón volver   --}}
            <a href="{{ url('/calls') }}" class="btn btn_call-back align-self-end d-block me-2 me-md-0"><i
                    class="fa-solid fa-caret-left align-middle me-1"></i>Volver</a>

        </div>
    </div>

@endsection


@push('js')
    <script src="{{ asset('vendor/clipboard.js/dist/clipboard.min.js') }}"></script>
    <script>
        // funcionalidad compartir en whatsapp
        function shareOnWhatsApp(url) {
            window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(url)}`, '_blank');
        }

        // funcionalidad compartir por email
        function shareByEmail(url) {
            window.location.href =
                `mailto:?subject=Interesante convocatoria&body=Echa un vistazo a esta convocatoria: ${encodeURIComponent(url)}`;
        }

        // funcionalidad compartir en red X (ex Twitter)
        function shareOnTwitter(url) {
            window.open(
                `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=Echa un vistazo a esta convocatoria`,
                '_blank');
        }

        // funcionalidad compartir en facebook
        function shareOnFacebook(url) {
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
        }

        // funcionalidad copiar URL Desktop
        function copyClipboard(url) {
            // console.log(url);
            navigator.clipboard.writeText(url).then(() => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "URL copiada al portapapeles"
                });
            }, () => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: "No se pudo copiar la URL"
                });
            });
        }
        // Copiar URL versión mobile

        let clipboard = new ClipboardJS('#btnCopyURL');
        // Proceso satisfactorio
        clipboard.on('success', function(e) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "URL copiada al portapapeles"
            });

            // e.clearSelection();
        });
        // Proceso erroneo
        clipboard.on('error', function(e) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "No se pudo copiar la URL"
            });
        });
    </script>

    <script>
        // funcionalidad agregar a calendar
        function addToCalendar(title, organization, expiration) {
            const event = {
                title: title,
                start: expiration,
                description: `Organizado por ${organization}`,
                url: window.location.href
            };

            const eventString = encodeURIComponent(
                `BEGIN:VCALENDAR\n` +
                `VERSION:2.0\n` +
                `BEGIN:VEVENT\n` +
                `SUMMARY:${event.title}\n` +
                `DESCRIPTION:${event.description}\n` +
                `DTSTART:${event.start.replace(/-/g, '')}T000000Z\n` +
                `URL:${event.url}\n` +
                `END:VEVENT\n` +
                `END:VCALENDAR`
            );

            const downloadLink = document.createElement('a');
            downloadLink.href = `data:text/calendar;charset=utf-8,${eventString}`;
            downloadLink.download = `${event.title}.ics`;
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }
    </script>
@endpush
