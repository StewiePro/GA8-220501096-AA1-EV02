<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::resource('/servicios', ServiciosController::class);

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::resource('/facturacion', FacturacionController::class);

Route::get('/facturacion', [FacturacionController::class, 'index'])->name('facturacion');

Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');

/*Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');

Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');

Route::get('/servicios/{servicio}', [ServiciosController::class, 'show'])->name('servicios.show');

Route::get('/servicios/{servicio}/edit', [ServiciosController::class, 'edit'])->name('servicios.edit');

Route::put('/servicios/{servicio}', [ServiciosController::class, 'update'])->name('servicios.update');

Route::delete('/servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');*/
