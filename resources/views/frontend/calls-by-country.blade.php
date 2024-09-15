@extends('layouts.app')
@section('title', 'Convocatorias - ' . $country->name)

@section('content')
    <div class="container min-vh-100">
        <div
            class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center mb-5">

            <h1 class="fs-3 text-center text-sm-start">Convocatorias <strong>{{ $country->name }}</strong>
                <img src="{{ asset('storage/flags/' . $country->flag) }}" alt="{{ $country->name }}" width="25"
                    class="ms-1">
            </h1>
            <a href="{{ route('calls') }}" class="btn btn-sm btn_call-back fw-semibold mt-2 mt-sm-0" href="">Mostrar
                todas</a>
        </div>
        <div class="row">
            @foreach ($calls as $call)
                <div class="col-lg-6 col-xl-4 mb-4 d-lg-flex">
                    <a href="{{ route('calls.detail', $call) }}" class="nav-link">
                        <div class="card card-custom shadow h-100">
                            <div class="card-body align-content-center calls_cards">
                                <div class="row gx-5">
                                    <div class="col-md-2">
                                        {{-- <img src="{{}}" alt="{{ $call->institution->name }}"> --}}
                                        <img src="{{ $call->institution->logo && file_exists(public_path('storage/institutions/' . $call->institution->logo)) ? asset('storage/institutions/' . $call->institution->logo) : asset('img/imagen-no-disponible.jpg') }}"
                                            alt="{{ $call->institution->name }}" width="55" height="55"
                                            style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="card-title">{{ $call->name }}</h5>
                                        <h6 class="text-secondary mt-2">{{ $call->institution->initial }}</h6>
                                        <p text-align="right">Cierre:
                                            {{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y') }}</p>
                                        {{-- <p class="card-text">{{ $call->resume }}</p> --}}
                                        <p><button type="button" class="btn btn-outline-secondary btn-sm"> <img
                                                    src="{{ asset('storage/flags/' . $call->country->flag) }}"
                                                    width="20" height="20">
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
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
