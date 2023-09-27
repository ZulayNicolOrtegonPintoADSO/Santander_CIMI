<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
    ];

    public function manzana()
    {
        return $this->hasMany(Manzana::class, 'fk_cod_municipio');
    }
}
