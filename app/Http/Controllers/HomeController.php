<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Establecimiento;
use App\Models\Manzana;
use App\Models\Municipio;
use App\Models\Municipios;
use App\Models\Servicio;
use App\Models\Servicios;
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
        $municipios = Municipio::paginate(100);

        // RETORNA A LA VISTA DEL FORMULARIO PARA AGREGAR 
        return view('viewsManzanas/agregar', compact('municipios'));
    }

    public function vistaEditManz($codigo)
    {
        $manzana = Manzana::find($codigo);

        $municipios = Municipio::paginate(100);

        // dd($codigo);

        return view('viewsManzanas/editar', compact('manzana', 'municipios'));
    }

    public function eliminarManz($codigo)
    {
        $manzana = Manzana::find($codigo);

        $manzana->delete();

        return redirect()->route('adminManzanas', compact('manzana'));
    }

    public function vistaMapa()
    {
        // RETORNA A LA VISTA DEL MAPA
        return view('viewsManzanas/manzana');
    }




    /* 
        FUNCIONES PARA VISTAS DE SERVICIOS
    */
    public function vista_servicio()
    {
        $servicios = Servicio::paginate(100);
        // dd($servicios);

        // RETORNA LA VISTA DE LOS ELEMENTOS DE LA BD SERVICIOS
        return view('viewsServicios/accionesServicios', compact('servicios'));
    }

    public function vistaAggServ()
    {
        $categorias = Categoria::paginate(100);
        $establecimientos =  Establecimiento::paginate(100);

        // RETORNA A LA VISTA DEL FORMULARIO PARA AGREGAR
        return view('viewsServicios/agregar', compact('categorias', 'establecimientos'));
    }

    public function vistaEditServ($codigo)
    {
        $categorias = Categoria::paginate(100);
        $establecimientos =  Establecimiento::paginate(100);
        $servicio = Servicio::find($codigo);
        // dd($codigo);

        // RETORNA A LA VISTA DEL FORMULARIO PARA EDITAR
        return view('viewsServicios/editar', compact('servicio', 'categorias', 'establecimientos'));
    }

    public function eliminarServ($codigo)
    {
        $servicio = Servicio::find($codigo);

        $servicio->delete();

        return redirect()->route('adminServicios', compact('servicio'));
    }
}
