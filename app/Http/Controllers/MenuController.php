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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datos['platillos'] = Platillo::paginate(50);
        return view('menu.menu',$datos);
        //return view('menu.menu');
    }

    public function revisar(Request $request)
    {
        $seleccion=$request->except('_token');

        $seleccionFiltrada = $seleccion;
        
        //Elimino aquellos cuya cantidad es 0
        //Por tanto, no formarán parte del pedido
        foreach ($seleccion as $cantidad){
            if ($cantidad == "0")
                unset($seleccionFiltrada[key($seleccion)]);
            next($seleccion);
        }


        return view('menu.revisar');
    }

    public function domicilio()
    {
        return view('menu.domicilio');
    }

    public function ordenar()
    {
        return view('menu.ordenar');
    }
}
