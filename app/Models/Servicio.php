<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'fk_codigo_categoria_servicios',
        'fk_codigo_establecimiento',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria_servicio::class, 'genero_id');    
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class, 'genero_id');    
    }
}
