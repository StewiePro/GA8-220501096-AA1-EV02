<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function facturacion()
    {
        return view('facturacion');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
}
