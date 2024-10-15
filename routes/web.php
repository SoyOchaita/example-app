<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('products');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.form');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('/ver-contactos', [ContactoController::class, 'show'])->name('contactos.show');
