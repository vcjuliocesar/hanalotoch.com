<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PlatilloController;
use App\Platillo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
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
        //$datos['platillos'] = Platillo::paginate(50);
        //return view('menu.index',$datos);
        return view('app.menus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.menus.agregar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit()  //agregar $id
    {
        //$platillo = Platillo::findOrFail($id);
        //return view('app.platillos.editar', compact('platillo'));
        return view('app.menus.editar');
    }
}
