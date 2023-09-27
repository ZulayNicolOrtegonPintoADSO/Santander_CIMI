<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento',
        'tipodoc',
        'nombres',
        'apellidos',
        'ciudad',
        'telefono',
        'correo',
        'direccion',
        'ocupacion',
        'fk_cod_servicio',
    ];

    public function agenda()
    {
        return $this->hasOne(Agenda::class, 'fk_doc_mujer');
    }

    public function servicios()
    {
        return $this->hasMany(Servicios::class, 'fk_cod_servicio');
    }
}
