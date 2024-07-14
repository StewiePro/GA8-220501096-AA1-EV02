@extends('layouts.app')

@section('titulo', 'borrar factura')

@section('contenido')

@foreach($bill as $taxes)
    <!-- Otros campos de la factura -->
    <form action="{{ route('facturacion.destroy', $bill->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de querer eliminar esta factura?')">Eliminar</button>
    </form>
@endforeach
