@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Crear Nuevo Servicio</h1>

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
            <form action="/servicios" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nombreservicio" class="form-label">Nombre del servicio</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" >
                </div>
                <div class="mb-3">
                    <label for="descripcionservicio" class="form-label">Descripción del servicio</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" >
                </div>
                <div class="form-group">
                    <label for="imagen">Cargar Imagen</label>
                    <br>
                    <input name="imagen" id="imagen" type="file">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        @endsection
