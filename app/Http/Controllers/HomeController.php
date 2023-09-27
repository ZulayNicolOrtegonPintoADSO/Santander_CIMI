<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use App\Models\Manzana_del_cuidado;
use App\Models\Manzana_del_cuidados;
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
        $manzanas = Manzana::paginate(20);
        $users = User::paginate(20);
        
        // dd($manzanas);
        
        return view('home', compact('users', 'manzanas'));
    }
    public function vista_municipio()
    {
        return view('municipios');
    }
    public function vista_mujeres()
    {
        return view('mujeres');
    }
    public function vista_manzana()
    {
        return view('manzana');
    }
    public function vista_servicios()
    {
        return view('servicios');
    }
    public function vista_establecimientos()
    {
        return view('establecimientos');
    }
    public function vista_agenda()
    {
        return view('agenda');
    }
}
