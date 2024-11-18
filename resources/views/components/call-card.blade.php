<div class="card h-100 w-100 d-flex flex-column">
  <a href="{{ route('calls.detail', $call) }}" class="nav-link d-flex flex-column h-100">

    <!-- Header de la tarjeta -->
    <div class="card-header">
      <div class="row">
        <div class="col-md-2">
          <img
            src="{{ $call->institution->logo && file_exists(public_path('storage/institutions/' . $call->institution->logo))
                ? asset('storage/institutions/' . $call->institution->logo)
                : asset('img/imagen-no-disponible.jpg') }}"
            alt="{{ $call->institution->name }}" width="55" height="55" style="object-fit: cover;">
        </div>
        <div class="col-md-10 text-end">
          <p>Cierre: <b>{{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</b></p>
          <h6 class="text-secondary mt-2">{{ $call->institution->initial }}</h6>
        </div>
      </div>
    </div>

    <!-- Body de la tarjeta -->
    <div class="card-body flex-grow-1">
      <h5 class="card-title">{{ $call->name }}</h5>
    </div>

    <!-- Footer de la tarjeta -->
    <div class="card-footer text-end bg-transparent mt-auto">
      @foreach ($call->countries as $country)
        <button type="button" class="btn btn-outline-secondary btn-sm p-0"><img
            src="{{ asset('storage/flags/' . $country->flag) }}" alt="{{ $country->name }}" width="22"
            height="20">
        </button>
      @endforeach


      {{-- <img src="{{ asset('storage/flags/' . $call->country->flag) }}" width="20" height="20">
        {{ $call->country->name }} --}}



      <button type="button" class="btn btn_calls-dedication btn-sm text-white">{{ $call->dedication->name }}</button>
      <button type="button" class="btn btn_calls-format btn-sm fw-semibold">{{ $call->format->name }}</button>

      @if ($call->extended === 1)
        <button class="btn btn-secondary btn-sm">
          <i class="fa-solid fa-tag me-1 align-middle"></i>Extendido
        </button>
      @endif
    </div>
  </a>
</div>
