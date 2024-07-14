@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-primary mb-3">Crear Nuevo Servicio</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif



    <div class="row">
        @foreach($servicios as $servicio)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                      <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/'.$servicio->imagen)}}" class="card-img-top" alt="{{ $servicio->nombre }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $servicio->nombre }}</h5>
                          <p class="card-text">{{ Str::limit($servicio->descripcion, 100) }}</p>
                          <a href="{{ route('servicios.show', $servicio) }}" class="btn btn-primary">Ver Detalles</a>
                        </div>
                      </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
