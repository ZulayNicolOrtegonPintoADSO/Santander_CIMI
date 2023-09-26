<?php

namespace App\Http\Controllers;

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
        $manzanas = Manzana_del_cuidado::paginate(20);
        $users = User::paginate(20);
        
        // dd($users);
        
        return view('home', compact('users'));
    }
}
