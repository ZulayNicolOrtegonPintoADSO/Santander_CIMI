<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'fk_doc_mujer',
        'fk_cod_manzanas_servicios',
        'disponibilidad',
    ];

    /* 
        RELACIONER UNO A UNO ENTRE AGENDA Y LOS
        MODELOS DE MUJER, MANZANA_SERVICIO
    */

    public function mujer()
    {
        return $this->hasOne(Mujer::class);
    }

    public function manzana_servicio()
    {
        return $this->hasOne(Manzana_servicio::class);
    }
}
