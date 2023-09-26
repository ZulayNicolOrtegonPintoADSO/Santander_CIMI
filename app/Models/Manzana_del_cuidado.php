<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manzana_del_cuidado extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'localidad',
        'direccion',
        'fk_codigo_municipio',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'fk_codigo_municipio');    
    }
}
