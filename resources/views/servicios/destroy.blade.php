@extends('layouts.app')

@section('titulo', 'borrar servicio')

@section('contenido')

@foreach($service as $modelo)
    <!-- Otros campos de la factura -->
    <form action="{{ route('servicio.destroy', $service->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de querer eliminar este servicio?')">Eliminar</button>
    </form>
@endforeach
