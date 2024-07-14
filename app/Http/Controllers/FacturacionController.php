<?php

namespace App\Http\Controllers;

use App\Models\Facturacion;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function index()
    {
        $facturas = Facturacion::all();
        return view('facturacion.index', compact('facturas'));
    }

    public function create()
    {
        return view('facturacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'concepto' => 'required|max:255',
            'descripcion' => 'required',
            'valor' => 'required|numeric|min:0',
        ]);

        $factura = Facturacion::create($request->all());

        return redirect()->route('facturacion.create')
            ->with('success', 'Factura creada exitosamente.');
    }

    public function show(Facturacion $facturacion)
    {
        return view('facturacion.show', compact('facturacion'));
    }

    public function edit(Facturacion $facturacion)
    {
        return view('facturacion.edit', compact('facturacion'));
    }

    public function update(Request $request, Facturacion $facturacion)
    {
        $request->validate([
            'concepto' => 'required|max:255',
            'descripcion' => 'required',
            'valor' => 'required|numeric|min:0',
        ]);

        $facturacion->update($request->all());

        return redirect()->route('facturacion.index')
            ->with('success', 'Factura actualizada exitosamente.');
    }

    public function destroy(Facturacion $facturacion)
    {
        $facturacion->delete();

    }
}
