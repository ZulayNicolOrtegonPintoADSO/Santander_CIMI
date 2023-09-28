<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use App\Models\Municipio;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    /*
        VALIDACIÓN CAMPOS FORM Y CRUD DE MUNICIPIOS
    */ 

    public function aggMunicipio(Request $request)
    {
        $request->validate([

            'nombre'=>	'required|string|max:20',
            
        ]);

        /*PARA CREAR UN NUEVO MUNICIPIO Y ASIGNAR LOS DATOS: */
        $municipio = new Municipio();

        $municipio->nombre = $request->nombre;

        $municipio->save();

        // dd($municipio);

        return redirect()->route('adminMunicipios', compact('municipio'));
    }

    public function editMunicipio(Request $request, $codigo)
    {
        $municipio = Municipio::find($codigo);

        /*VALIDO LOS DATOS DEL FORMULARIO */

        $request->validate([
            'nombre'=>	'required|string|max:20',
        ]);

        /*PARA CREAR UN NUEVO PERFIL Y ASIGNAR LOS DATOS: */
        $municipio->nombre = $request->nombre;

        // Guardar el cambio en la base de datos
        $municipio->save();

        // dd($codigo);

        return redirect()->route('adminMunicipios', compact('municipio'));
    }



    /*
        VALIDACIÓN CAMPOS FORM Y CRUD DE MANZANAS
    */ 

    public function aggManzana(Request $request)
    {
        $request->validate([

            'nombre'=>	'required|string|max:20',
            'localidad'=>	'required',
            'direccion'=>	'required',
            'fk_cod_municipio'=>	'required',
            
        ]);

        /*PARA CREAR UN NUEVO MUNICIPIO Y ASIGNAR LOS DATOS: */
        $manzana = new Manzana();

        $manzana->nombre = $request->nombre;
        $manzana->localidad = $request->localidad;
        $manzana->direccion = $request->direccion;
        $manzana->fk_cod_municipio = $request->fk_cod_municipio;

        $manzana->save();

        // dd($municipio);

        return redirect()->route('adminManzanas', compact('manzana'));
    }

    public function editManzana(Request $request, $codigo)
    {
        $manzana = Manzana::find($codigo);

        /*VALIDO LOS DATOS DEL FORMULARIO */

        $request->validate([
            'nombre'=>	'required|string|max:20',
            'localidad'=>	'required',
            'direccion'=>	'required',
            'fk_cod_municipio'=> 'required',
        ]);

        /*PARA CREAR UN NUEVO PERFIL Y ASIGNAR LOS DATOS: */
        $manzana->nombre = $request->nombre;
        $manzana->localidad = $request->localidad;
        $manzana->direccion = $request->direccion;
        $manzana->fk_cod_municipio = $request->fk_cod_municipio;

        // Guardar el cambio en la base de datos
        $manzana->save();

        // dd($codigo);

        return redirect()->route('adminManzanas', compact('manzana'));
    }
}
