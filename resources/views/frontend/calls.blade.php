@extends('layouts.app')
@section('title','Convocatorias')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3 bg-warning p-4">

        <form action="{{ route('calls') }}" method="GET">
          <div class="mb-3">
            <label for="search" class="form-label">Buscar</label>
            <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}">
          </div>
          <div class="mb-3">
            <label for="country_id" class="form-label">País</label>
            <select class="form-control" id="country_id" name="country_id">
              <option value="">Todos</option>
              @foreach ($countries as $country)
                <option value="{{ $country->id }}" {{ request('country_id') == $country->id ? 'selected' : '' }}>
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
                <option value="{{ $format->id }}" {{ request('format_id') == $format->id ? 'selected' : '' }}>
                  {{ $format->name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>



      </div>


      <div class="col-md-9">
        <div class="row">
          @foreach ($calls as $call)
            <div class="col-md-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">
                      {{-- <img src="{{}}" alt="{{ $call->institution->name }}"> --}}
                      <img
                        src="{{ $call->institution->logo && file_exists(public_path('storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                        alt="{{ $call->institution->name }}" width="80" height="80" style="object-fit: cover;">
                    </div>
                    <div class="col-md-10">
                        <h5 class="card-title">{{ $call->name }}</h5>
                      <p text-align="right">Cierre: {{\Carbon\Carbon::parse($call->expiration)->format('d-m-Y')  }}</p>
                      {{-- <p class="card-text">{{ $call->resume }}</p> --}}
                      <p><button type="button" class="btn btn-outline-secondary btn-sm"> <img
                            src="{{ asset('storage/flags/' . $call->country->flag) }}" width="20" height="20">
                          {{ $call->country->name }}</button>
                        <button type="button" class="btn btn-warning btn-sm">{{ $call->dedication->name }}</button>
                        <button type="button" class="btn btn-success btn-sm">{{ $call->format->name }}</button>
                        @if($call->extended === 1)
                          <button class="btn btn-secondary btn-sm"><i class="fa-solid fa-tag me-1 align-middle"></i>Extendido</button>
                        @endif
                      </p>
                      {{-- <a href="{{ $call->link }}">Ir a la publicación</a> --}}
{{--                      <a href="{{ $call->link }}">Leer más</a>--}}
                      <a href="{{route('calls.detail', $call)}}" class="text-primary nav-link"><i class="fa-solid fa-caret-right align-middle text-black me-1"></i>Ver detalle</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        {{ $calls->links() }}
      </div>
    </div>
  </div>
@endsection
