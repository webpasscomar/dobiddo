@extends('layouts.app')
@section('title', 'Convocatorias')
@section('content')

  @include('frontend.calls-search')

  <div class="container">

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
        <div class="col-lg-6 col-xl-4 mb-4 d-lg-flex">

          {{-- <a href="{{ route('calls.detail', $call) }}" class="nav-link">
            <div class="card card-custom shadow h-100">
              <div class="card-body align-content-center calls_cards">
                <div class="row gx-5">
                  <div class="col-md-2">
                    <img
                      src="{{ $call->institution->logo && file_exists(public_path('storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                      alt="{{ $call->institution->name }}" width="55" height="55" style="object-fit: cover;">
                  </div>
                  <div class="col-md-10">
                    <h5 class="card-title">{{ $call->name }}</h5>
                    <h6 class="text-secondary mt-2">{{ $call->institution->initial }}</h6>
                    <p text-align="right">Cierre:
                      {{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</p>
                    <p><button type="button" class="btn btn-outline-secondary btn-sm"> <img
                          src="{{ asset('storage/flags/' . $call->country->flag) }}" width="20" height="20">
                        {{ $call->country->name }}</button>
                      <button type="button"
                        class="btn btn_calls-dedication btn-sm text-white">{{ $call->dedication->name }}</button>
                      <button type="button"
                        class="btn btn_calls-format btn-sm fw-semibold">{{ $call->format->name }}</button>
                    </p>
                    @if ($call->extended === 1)
                      <button class="btn btn-secondary btn-sm"><i
                          class="fa-solid fa-tag me-1 align-middle"></i>Extendido</button>
                    @endif

                  </div>
                </div>
              </div>
            </div>
          </a> --}}

          <div class="card h-100 w-100">
            <a href="{{ route('calls.detail', $call) }}" class="nav-link">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-2">
                    <img
                      src="{{ $call->institution->logo && file_exists(public_path('storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                      alt="{{ $call->institution->name }}" width="55" height="55" style="object-fit: cover;">
                  </div>
                  <div class="col-md-10 text-end">
                    <p>Cierre: <b>
                        {{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</b></p>
                    <h6 class="text-secondary mt-2">{{ $call->institution->initial }}</h6>

                  </div>
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $call->name }}</h5>
              </div>
              <div class="card-footer text-end bg-transparent">
                <button type="button" class="btn btn-outline-secondary btn-sm"> <img
                    src="{{ asset('storage/flags/' . $call->country->flag) }}" width="20" height="20">
                  {{ $call->country->name }}</button>
                <button type="button"
                  class="btn btn_calls-dedication btn-sm text-white">{{ $call->dedication->name }}</button>
                <button type="button" class="btn btn_calls-format btn-sm fw-semibold">{{ $call->format->name }}</button>

                @if ($call->extended === 1)
                  <button class="btn btn-secondary btn-sm"><i
                      class="fa-solid fa-tag me-1 align-middle"></i>Extendido</button>
                @endif
              </div>
            </a>
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

@endsection
