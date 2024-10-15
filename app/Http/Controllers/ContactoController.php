<?php

namespace App\Http\Controllers;

use App\Mail\ContactoRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactoController extends Controller
{
    public function index()
    {
        // Retornar la vista del formulario de contacto
        return view('contacto');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'publicidad' => 'required|boolean',
            'mensaje' => 'required',
            
        ]);

        
        // Recoger los datos del formulario
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $publicidad = $request->input('publicidad') ? 'Sí' : 'No';
        $mensaje = $request->input('mensaje');

        // Enviar el correo utilizando el Mailable
        Mail::to('ochaita2404@gmail.com')
            ->bcc('barqueromauricio@umes.edu.gt')
            ->send(new ContactoRecibido($nombre, $email, $publicidad, $mensaje));

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Tu mensaje de contacto ha sido enviado correctamente.');
    }
    public function show()
    {
    // Obtener todos los contactos ordenados del más reciente al más antiguo
    $contacts = Contact::orderBy('created_at', 'desc')->get();

    // Pasar los contactos a la vista
    return view('ver_contactos', ['contacts' => $contacts]);
    }

}
