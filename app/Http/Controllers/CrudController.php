<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class CrudController extends Controller
{
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
}
