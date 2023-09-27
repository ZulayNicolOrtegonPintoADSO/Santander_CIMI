<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manzana_servicio extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'codigo',
        'fk_cod_servicio',
        'fk_cod_manzana',
    ];

    public function agenda()
    {
        return $this->hasOne(Agenda::class, 'fk_cod_manzanas_servicios');
    }
}
