<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use App\Models\Municipio;
use App\Models\Municipios;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function vista_municipio()
    {
        $municipios = Municipio::paginate(100);
        // dd($municipios);

        // RETORNA LA VISTA DE LOS ELEMENTOS DE LA BD DE MUNICIPIOS
        return view('viewsMunicipios/accionesMunicipios', compact('municipios'));
    }

    public function vistaAggMun()
    {
        // RETORNA A LA VISTA DEL FORMULARIO PARA AGREGAR MUNICIPIO
        return view('viewsMunicipios/agregar');
    }

    public function vistaEditMun($codigo)
    {
        $municipio = Municipio::find($codigo);
        // dd($codigo);

        // RETORNA A LA VISTA DEL FORMULARIO PARA EDITAR UN MUNICIPIO TENIENDO EN CUENTA SU ID
        return view('viewsMunicipios/editar', compact('municipio'));
    }

    public function eliminarMun($codigo)
    {
        $municipio = Municipio::find($codigo);

        $municipio->delete();

        return redirect()->route('adminMunicipios', compact('municipio'));
    }

    
    

    // public function vista_municipio()
    // {
    //     $municipios = Municipio::paginate(100);
    //     // dd($municipios);
    //     return view('municipios', compact('municipios'));
    // }
    // public function vista_mujeres()
    // {
    //     return view('mujeres');
    // }
    // public function vista_manzana()
    // {
    //     return view('manzana');
    // }
    // public function vista_servicios()
    // {
    //     return view('servicios');
    // }
    // public function vista_establecimientos()
    // {
    //     return view('establecimientos');
    // }
    // public function vista_agenda()
    // {
    //     return view('agenda');
    // }
}
