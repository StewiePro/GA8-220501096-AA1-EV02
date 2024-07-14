@extends('layouts.app')

@section('content')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($servicio->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$servicio->descripcion}}</p>
    </div>
    <br>
    <a href="/servicios/{{$servicio->id}}/edit" class="btn btn-warning">Editar Servicios</a>
    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
    </form>
</div>

@endsection

