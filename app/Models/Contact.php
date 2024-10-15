<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';  // Confirmar que coincide con el nombre en la base de datos

    protected $fillable = ['nombre', 'email', 'publicidad', 'mensaje']; // Asegúrate que estos campos son correctos
}
