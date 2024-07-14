@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Crear Nueva Factura</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('facturacion.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="concepto">Concepto:</label>
                    <input type="text" class="form-control" id="concepto" name="concepto" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Crear Factura</button>
                <a href="{{ route('facturacion.create') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
