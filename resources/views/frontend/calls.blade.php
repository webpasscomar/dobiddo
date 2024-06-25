@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3">
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
          <div class="mb-3">
            <label for="institution_id" class="form-label">Institución</label>
            <select class="form-control" id="institution_id" name="institution_id">
              <option value="">Todos</option>
              @foreach ($institutions as $institution)
                <option value="{{ $institution->id }}"
                  {{ request('institution_id') == $institution->id ? 'selected' : '' }}>{{ $institution->name }}</option>
              @endforeach
            </select>
          </div>
          <!-- Similar select inputs for dedication, duration, and format -->
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
      </div>
      <div class="col-md-9">
        <div class="row">
          @foreach ($calls as $call)
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $call->name }}</h5>
                  <p class="card-text">{{ $call->resume }}</p>
                  <a href="{{ $call->link }}" class="btn btn-primary">Ver más</a>
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
