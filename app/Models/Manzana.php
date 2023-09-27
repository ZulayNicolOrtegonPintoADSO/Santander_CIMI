<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manzana extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'localidad',
        'direccion',
        'fk_cod_municipio',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'fk_cod_municipio', 'codigo');    
    }
}
