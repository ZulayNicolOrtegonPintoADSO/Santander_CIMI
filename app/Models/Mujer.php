<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento',
        'tipo_documento',
        'nombres',
        'apellidos',
        'ciudad',
        'telefono',
        'correo',
        'direccion',
        'ocupacion',
    ];
}
