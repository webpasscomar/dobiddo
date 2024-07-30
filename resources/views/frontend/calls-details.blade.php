@extends('layouts.app')
@section('title','Convocatorias - Detalle')
@section('content')


  <div>
    <div class="card p-2">
        <a href="#" class="text-primary align-self-end" title="compartir"><i class="fa-regular fa-share-from-square fs-5 align-middle"></i></a>
      <div class="card-body">
      {{-- Imagen /nombre / extendido / compartir --}}
        <div class="row">
          <div class="col-12 col-lg-10">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
            <img src="{{$call->institution->logo && file_exists(public_path('./storage/institutions/'.$call->institution->logo)) ? asset('storage/institutions/'.$call->institution->logo) : asset('img/imagen-no-disponible.jpg')}}" alt="{{$call->name}}" width="100" height="100" class="object-fit-cover">
            <div class="d-flex flex-column">
              <h1 class="fs-3 mt-4 mt-md-0">{{$call->name}}</h1>
              <div class="d-flex align-items-center mt-2 column-gap-2">
                @if($call->extended === 1)
                  <button class="btn btn-secondary btn-sm btn-extended"><i class="fa-solid fa-tag align-middle me-1"></i>EXTENDIDO</button>
                @endif
              </div>
            </div>
            </div>
          </div>
          {{--      fecha expiracion      --}}
          <div class ="col-12 col-lg-2 mt-3 mt-lg-0 fs-5">
            <i class="fa-regular fa-calendar-days"></i>
            <span>{{ \Carbon\Carbon::parse($call->expiration)->format('d-m-Y')}}</span>
          </div>
        </div>
        {{--    Resumen      --}}
        <div class="row mt-4">
          <div class="col-md-12">
            <p>{!! $call->resume !!}</p>
          </div>
        </div>
        {{--    Contenido      --}}
        <div class="row mt-3">
          <div class="col-md-12">
            <p>{!! $call->content !!}</p>
          </div>
        </div>
        {{--    link - URL      --}}
        <div class="row mt-3">
          <div class="col-md-12">
            <p>Más Información: </p>
            <p class="fs-6 align-middle nav-item text-primary"><a href="{{$call->link}}" class="nav-link" target="_blank"><i class="fa-solid fa-link align-middle me-1"></i>{{$call->link}}</a></p>
          </div>
        </div>
        {{--    Aclaración      --}}
        <div class="row mt-3">
          <div class="col-md-12">
            <p>Aclaración: {{$call->comment}}</p>
          </div>
        </div>
        {{--    botones país, formato, dedicación      --}}
        <div class="row mt-3">
          <div class="col-md-12">
            <button class="btn btn-sm btn-outline-secondary"><img src="{{asset('storage/flags/'.$call->country->flag)}}" alt="{{$call->name}}" width="20" height="20" class="me-1">{{$call->country->name}}</button>
            <button class="btn btn-warning btn-sm">{{$call->dedication->name}}</button>
            <button type="button" class="btn btn-success btn-sm">{{ $call->format->name }}</button>
          </div>
        </div>
        {{--   Sectores     --}}
        <div class="row mt-5">
          <div class="col-md-12">
            <p>Sectores:</p>
            <ul>
              @foreach($call->sectors as $sector)
                <li class="nav-link"><i class="fa-solid fa-check align-middle fs-6 me-1 text-success"></i>{{$sector->name}}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      {{--    botón volver   --}}
      <a href="{{route('calls')}}" class="btn btn-secondary btn-sm align-self-end d-block"><i class="fa-solid fa-caret-left align-middle me-1"></i>Volver</a>
    </div>
  </div>
@endsection
