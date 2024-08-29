@extends('layouts.app')
@section('title', 'Convocatorias - Detalle')
@section('content')


  <div>
    <div class="card p-2">
      <a href="#" class="text-primary align-self-end" title="compartir"><i
          class="fa-regular fa-share-from-square fs-5 align-middle"></i></a>
      <div class="card-body">
        {{-- Imagen /nombre / extendido / compartir --}}
        <div class="row">
          <div class="col-12 col-lg-10">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
              <img
                src="{{ $call->institution->logo && file_exists(public_path('./storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                alt="{{ $call->name }}" width="100" height="100" class="object-fit-cover">

              <div class="d-flex flex-column">
                <h1 class="fs-3 mt-4 mt-md-0">{{ $call->name }}</h1>


                {{--    botones país, formato, dedicación      --}}
                <div class="row mt-3">
                  <div class="col-md-12">
                    <button class="btn btn-sm btn-outline-secondary"><img
                        src="{{ asset('storage/flags/' . $call->country->flag) }}" alt="{{ $call->name }}"
                        width="20" height="20" class="me-1">{{ $call->country->name }}</button>
                    <button class="btn btn-warning btn-sm">{{ $call->dedication->name }}</button>
                    <button type="button" class="btn btn-success btn-sm">{{ $call->format->name }}</button>
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
          <div class ="col-12 col-lg-2 mt-3 mt-lg-0 fs-5">
            <i class="fa-regular fa-calendar-days"></i>
            <span>{{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</span>
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



        {{--    Aclaración      --}}
        <div class="row mt-3">
          <div class="col-md-12">
            <p>Aclaración: {{ $call->comment }}</p>
          </div>
        </div>

        {{--   Sectores     --}}
        <div class="row mt-5">
          <div class="col-md-12">
            <p>Sectores:</p>
            <ul>
              @foreach ($call->sectors as $sector)
                <li class="nav-link"><i
                    class="fa-solid fa-check align-middle fs-6 me-1 text-success"></i>{{ $sector->name }}</li>
              @endforeach
            </ul>
          </div>
        </div>


        {{--    link - URL      --}}
        <div class="row mt-3">
          <div class="col-md-12">
            {{-- <p>Más Información: </p> --}}
            <a href="{{ $call->link }}" class="btn btn-sm btn-secondary" target="_blank"><i
                class="fa-solid fa-link align-middle me-1"></i> Más información</a>
          </div>
        </div>


        <div>
          <!-- Botones de compartir -->
          <div class="mt-3">
            <p>Compartir la convocatoria por:</p>
            <button class="btn btn-sm btn-success" onclick="shareOnWhatsApp('{{ url()->current() }}')">
              <i class="fab fa-whatsapp"></i>
            </button>
            <button class="btn btn-sm btn-primary" onclick="shareByEmail('{{ url()->current() }}')">
              <i class="fas fa-envelope"></i>
            </button>
            <button class="btn btn-sm btn-info" onclick="shareOnTwitter('{{ url()->current() }}')">
              <i class="fab fa-x-twitter"></i>
            </button>
            <button class="btn btn-sm btn-primary" onclick="shareOnFacebook('{{ url()->current() }}')">
              <i class="fab fa-facebook"></i>
            </button>
            <button class="btn btn-sm btn-secondary" onclick="copyToClipboard('{{ url()->current() }}')">
              <i class="fas fa-copy"></i>
            </button>
            <button class="btn btn-sm btn-warning"
              onclick="addToCalendar('{{ $call->name }}', '{{ $call->institution->name }}', '{{ $call->expiration }}')">
              <i class="fas fa-calendar-plus"></i>
            </button>
            <a href="{{ route('google.redirect', ['call_id' => $call->id]) }}" class="btn btn-sm btn-primary"
              title="Agregar a mi Calendar">
              <i class="fas fa-calendar-plus"></i>
            </a>
          </div>
        </div>


      </div>

      {{--    botón volver   --}}
      <a href="{{ route('calls') }}" class="btn btn-secondary btn-sm align-self-end d-block"><i
          class="fa-solid fa-caret-left align-middle me-1"></i>Volver</a>

    </div>
  </div>

@endsection


@push('js')
  <script>
    function shareOnWhatsApp(url) {
      window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(url)}`, '_blank');
    }

    function shareByEmail(url) {
      window.location.href =
        `mailto:?subject=Interesante convocatoria&body=Echa un vistazo a esta convocatoria: ${encodeURIComponent(url)}`;
    }

    function shareOnTwitter(url) {
      window.open(
        `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=Echa un vistazo a esta convocatoria`,
        '_blank');
    }

    function shareOnFacebook(url) {
      window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
    }

    function copyToClipboard(url) {
      navigator.clipboard.writeText(url).then(() => {
        alert('URL copiada al portapapeles');
      }, () => {
        alert('Error al copiar la URL');
      });
    }
  </script>

  <script>
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
