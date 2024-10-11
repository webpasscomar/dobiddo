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

      @isset($country)
        <div
          class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center mb-5">

          <h1 class="fs-3 text-center text-sm-start">Convocatorias <strong>{{ $country->name }}</strong>
            <img src="{{ asset('storage/flags/' . $country->flag) }}" alt="{{ $country->name }}" width="25" class="ms-1">
          </h1>
          <a href="{{ route('calls') }}" class="btn btn-sm btn_call-back fw-semibold mt-2 mt-sm-0" href="">Mostrar
            todas</a>
        </div>
      @endisset

      @forelse ($calls as $call)
        <div class="col-lg-6 col-xl-4 mb-4 d-lg-flex">

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
            <div class="alert alert-warning">
              <h5><i class="fas fa-exclamation-triangle"></i> No se encontraron convocatorias.<h5>
            </div>
          </div>
        </div>
      @endforelse
    </div>
    {{ $calls->links() }}
  </div>

@endsection
