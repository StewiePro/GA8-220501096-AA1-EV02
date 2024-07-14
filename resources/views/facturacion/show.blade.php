@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalle de Factura</h1>

    <div class="factura-card">
        <h2 class="factura-titulo">{{ $facturacion->concepto }}</h2>
        <p class="factura-descripcion">{{ $facturacion->descripcion }}</p>
        <p class="factura-valor">Valor: ${{ number_format($facturacion->valor, 2) }}</p>

        <div class="mt-4">
            <a href="{{ route('facturacion.edit', $facturacion) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('facturacion.destroy', $facturacion) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>

        </div>
    </div>
</div>
@endsection
