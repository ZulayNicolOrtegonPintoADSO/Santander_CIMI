<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function agregar()
    {
        // $municipios = Municipio::paginate(100);

        return  "controlador agregar";
    }

    public function editar()
    {
        // $municipios = Municipio::paginate(100);

        return  "controlador editar";
    }

    public function eliminar()
    {
        // $municipios = Municipio::paginate(100);

        return  "controlador eliminar";
    }
}
