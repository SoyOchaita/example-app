<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function show($texto)
    {
        // Aquí se devuelve una vista llamada 'primer-view' y le pasamos el texto como variable
        return view('primer-view', ['texto' => $texto]);
    }
}
