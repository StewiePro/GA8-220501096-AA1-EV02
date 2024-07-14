@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Facturación</h1>
    <a href="{{ route('facturacion.create') }}" class="btn btn-primary mb-3">Crear Nueva Factura</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facturas as $factura)
                        <tr>
                            <td>{{ $factura->concepto }}</td>
                            <td>{{ $factura->descripcion }}</td>
                            <td>{{ $factura->valor }}</td>
                            <td>
                                <a href="{{ route('facturacion.show', $factura) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('facturacion.edit', $factura) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('facturacion.destroy', $factura) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
