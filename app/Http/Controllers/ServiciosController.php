<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        return view('servicios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $servicio = new Servicio();
        $servicio->nombre = $request->input('nombre');
        $servicio->descripcion = $request->input('descripcion');

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/servicios');
            $servicio->imagen = str_replace('public/', '', $imagenPath);
        }

        $servicio->save();

        return redirect()->route('servicios.create')->with('success', 'Servicio creado exitosamente');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $servicio->nombre = $request->input('nombre');
        $servicio->descripcion = $request->input('descripcion');

        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if ($servicio->imagen) {
                Storage::delete('public/' . $servicio->imagen);
            }

            $imagenPath = $request->file('imagen')->store('public/servicios');
            $servicio->imagen = str_replace('public/', '', $imagenPath);
        }

        $servicio->save();

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente');
    }


    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

    }

}
