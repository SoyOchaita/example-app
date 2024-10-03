<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $publicidad;
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $publicidad, $mensaje)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->publicidad = $publicidad;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->nombre)
                    ->to('ochaita2404@gmail.com')  // Tu correo
                    ->bcc('barqueromauricio@umes.edu.gt')  // BCC como se solicitó
                    ->replyTo($this->email)
                    ->subject(__('messages.subject', ['name' => $this->nombre]))  // Usar la traducción con el nombre
                    ->markdown('emails.contacto');  // Plantilla del correo
    }
}
