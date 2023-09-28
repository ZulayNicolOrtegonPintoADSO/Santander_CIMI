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

    /* 
        FUNCIONES PARA VISTAS DE MUNICIPIOS
    */
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

    
    /* 
        FUNCIONES PARA VISTAS DE MANZANAS
    */
    public function vista_manzana()
    {
        $manzanas = Manzana::paginate(100);
        // dd($manzanas);

        return view('viewsManzanas/accionesManzanas', compact('manzanas'));
    }

    public function vistaAggManz()
    {
        // RETORNA A LA VISTA DEL FORMULARIO PARA AGREGAR MUNICIPIO
        return view('viewsManzanas/agregar');
    }

    public function vistaEditManz($codigo)
    {
        $manzana = Manzana::find($codigo);
        // dd($codigo);

        return view('viewsManzanas/editar', compact('manzana'));
    }

    public function eliminarManz($codigo)
    {
        $manzana = Manzana::find($codigo);

        $manzana->delete();

        return redirect()->route('adminManzanas', compact('manzana'));
    }

   
}
