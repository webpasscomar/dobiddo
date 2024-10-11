@extends('layouts.app')

@section('title', 'Convocatorias')

@section('content')

  @include('frontend.calls-search')

  <div class="container">
    <div class="row">

      {{-- Filtros de búsqueda aplicados --}}
      @if (array_filter($filters))
        <div class="my-4 my-md-0 mb-md-2">
          <span>Resultados para la búsqueda </span>
          @if (!empty($filters['search']))
            "<strong>{{ $filters['search'] }}</strong>"
          @endif

          {{-- Filtro por país --}}
          @isset($country)
            en el país "<strong>{{ $country->name }}</strong>"
          @endisset

          {{-- Filtro por formato --}}
          @isset($format)
            con la modalidad "<strong>{{ $format->name }}</strong>"
          @endisset
        </div>
      @endif

      {{-- Mostrar país si está filtrado --}}
      @isset($country)
        <div
          class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center mb-5">
          <h1 class="fs-3 text-center text-sm-start">Convocatorias <strong>{{ $country->name }}</strong>
            <img src="{{ asset('storage/flags/' . $country->flag) }}" alt="{{ $country->name }}" width="25" class="ms-1">
          </h1>
          <a href="{{ route('calls') }}" class="btn btn-sm btn_call-back fw-semibold mt-2 mt-sm-0">Mostrar todas</a>
        </div>
      @endisset

      {{-- Listado de convocatorias --}}
      @forelse($calls as $call)
        <div class="col-lg-6 col-xl-4 mb-4 d-lg-flex">
          <x-call-card :call="$call" />
        </div>
      @empty
        <div class="col-md-12 mt-3 fs-6">
          <div class="alert alert-warning">
            <h5><i class="fas fa-exclamation-triangle"></i> No se encontraron convocatorias.</h5>
          </div>
        </div>
      @endforelse
    </div>

    {{-- Paginación --}}
    {{ $calls->links() }}
  </div>

@endsection
