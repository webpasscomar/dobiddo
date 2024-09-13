@extends('layouts.app')
@section('title', 'Convocatorias')
{{-- @section('title', 'Convocatorias') --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-warning p-4">

                <form action="{{ route('calls') }}" method="GET">
                    <div class="mb-3">
                        <label for="search" class="form-label">Buscar</label>
                        <input type="search" class="form-control" id="search" name="search"
                            value="{{ request()->search }}" placeholder="Buscar por nombre, resumen">
                    </div>
                    <div class="mb-3">
                        <label for="country_id" class="form-label">País</label>
                        <select class="form-control" id="country_id" name="country_id">
                            <option value="">Todos</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ request('country_id') == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="mb-3">
            <label for="institution_id" class="form-label">Institución</label>
            <select class="form-control" id="institution_id" name="institution_id">
              <option value="">Todos</option>
              @foreach ($institutions as $institution)
                <option value="{{ $institution->id }}"
                  {{ request('institution_id') == $institution->id ? 'selected' : '' }}>{{ $institution->name }}</option>
              @endforeach
            </select>
          </div> --}}
                    {{-- <div class="mb-3">
            <label for="dedication_id" class="form-label">Dedicación</label>
            <select class="form-control" id="dedication_id" name="dedication_id">
              <option value="">Todos</option>
              @foreach ($dedications as $dedication)
                <option value="{{ $dedication->id }}" {{ request('dedication_id') == $dedication->id ? 'selected' : '' }}>
                  {{ $dedication->name }}</option>
              @endforeach
            </select>
          </div> --}}
                    {{-- <div class="mb-3">
            <label for="duration_id" class="form-label">Duración</label>
            <select class="form-control" id="duration_id" name="duration_id">
              <option value="">Todos</option>
              @foreach ($durations as $duration)
                <option value="{{ $duration->id }}" {{ request('duration_id') == $duration->id ? 'selected' : '' }}>
                  {{ $duration->name }}</option>
              @endforeach
            </select>
          </div> --}}
                    <div class="mb-3">
                        <label for="format_id" class="form-label">Formato</label>
                        <select class="form-control" id="format_id" name="format_id">
                            <option value="">Todos</option>
                            @foreach ($formats as $format)
                                <option value="{{ $format->id }}"
                                    {{ request('format_id') == $format->id ? 'selected' : '' }}>
                                    {{ $format->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    @if (count($filters) !== 0)
                        <a href="{{ route('calls') }}" class="btn btn-danger">Limpiar</a>
                    @endif
                </form>
            </div>

            <div class="col-md-9">
                <div class="row">
                    @if (array_filter($filters))
                        <div class="my-4 my-md-0 mb-md-2">
                            <span>Resultados para la búsqueda </span>
                            @if (!empty($filters['search']))
                                "<strong>{{ $filters['search'] }}</strong>"
                            @endif
                            @if (!empty($filters['country_id']))
                                @php
                                    $country = \App\Models\Country::find($filters['country_id']);
                                @endphp
                                @if ($country)
                                    en el país "<strong>{{ $country->name }}</strong>"
                                @endif
                            @endif
                            @if (!empty($filters['format_id']))
                                @php
                                    $format = \App\Models\Format::find($filters['format_id']);
                                @endphp
                                @if ($format)
                                    con la modalidad "<strong>{{ $format->name }}</strong>"
                                @endif
                            @endif
                        </div>
                    @endif

                    @forelse ($calls as $call)
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            {{-- <img src="{{}}" alt="{{ $call->institution->name }}"> --}}
                                            <img src="{{ $call->institution->logo && file_exists(public_path('storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                                                alt="{{ $call->institution->name }}" width="80" height="80"
                                                style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-10">
                                            <h5 class="card-title">{{ $call->name }}</h5>
                                            <h6 class="text-secondary">{{ $call->institution->initial }}</h6>
                                            <p text-align="right">Cierre:
                                                {{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</p>
                                            {{-- <p class="card-text">{{ $call->resume }}</p> --}}
                                            <p><button type="button" class="btn btn-outline-secondary btn-sm"> <img
                                                        src="{{ asset('storage/flags/' . $call->country->flag) }}"
                                                        width="20" height="20">
                                                    {{ $call->country->name }}</button>
                                                <button type="button"
                                                    class="btn btn-warnin btn-sm">{{ $call->dedication->name }}</button>
                                                <button type="button"
                                                    class="btn btn-success btn-sm">{{ $call->format->name }}</button>
                                                @if ($call->extended === 1)
                                                    <button class="btn btn-secondary btn-sm"><i
                                                            class="fa-solid fa-tag me-1 align-middle"></i>Extendido</button>
                                                @endif
                                            </p>
                                            {{-- <a href="{{ $call->link }}">Ir a la publicación</a> --}}
                                            {{--                      <a href="{{ $call->link }}">Leer más</a> --}}
                                            <a href="{{ route('calls.detail', $call) }}" class="text-primary nav-link"><i
                                                    class="fa-solid fa-caret-right align-middle text-black me-1"></i>Ver
                                                detalle</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="row">
                            <div class="col-md-12 mt-3 fs-6">
                                <h4>No se encontraron convocatorias</h4>
                            </div>
                        </div>
                    @endforelse


                </div>
                {{ $calls->links() }}
            </div>
        </div>
    </div>
@endsection


@section('js')
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
@stop
