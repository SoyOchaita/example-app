<?php

// routes/web.php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('products');
});

use App\Http\Controllers\ContactoController;

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.form');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
Route::get('/agradecimiento', [ContactoController::class, 'agradecimiento'])->name('contacto.agradecimiento');
