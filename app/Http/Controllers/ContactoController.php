<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Muestra el formulario de contacto
    public function index()
    {
        return view('contacto');
    }

    // Procesa el envío del formulario
    public function enviar(Request $request)
    {
        // Validaciones
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'publicidad' => 'required|in:1,0', // Validar que sea 1 (true) o 0 (false)
            'mensaje' => 'nullable',
        ]);

        // Redirige a la página de agradecimiento si la validación pasa
        return redirect()->route('contacto.agradecimiento');
    }

    // Muestra la pantalla de agradecimiento
    public function agradecimiento()
    {
        return view('agradecimiento');
    }
}
