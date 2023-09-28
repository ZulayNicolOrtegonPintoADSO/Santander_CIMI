<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $primaryKey = 'codigo';
    
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'fk_cod_categoria',
        'fk_cod_establecimiento',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria_servicio::class, 'fk_cod_categoria', 'codigo');    
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class, 'fk_cod_establecimiento', 'codigo');    
    }

    public function mujer()
    {
        return $this->belongsTo(Mujer::class, 'fk_cod_servicio');
    }
}
