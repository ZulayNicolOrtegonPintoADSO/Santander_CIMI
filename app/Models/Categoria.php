<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
    ];

    public function servicios()
    {
        return $this->hasMany(Servicios::class, 'fk_cod_categoria');
    }
}
