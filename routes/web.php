<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('products');
});
