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
                //echo key($seleccion) . "<br />";
            next($seleccion);
        }

        //Consultas a base de datos
        foreach ($seleccionFiltrada as $sel){
            //echo key($seleccionFiltrada);
            $idProductoSeleccionado = key($seleccionFiltrada);

            //$profession = DB::table('platillos')->whereId($idProductoSeleccionado);
            
            $platillo['platos'] = Platillo::findOrFail($idProductoSeleccionado);
            
            echo json_encode($platillo);
            echo "<br/>";
            next($seleccionFiltrada);
        }

        return view('menu.revisar', $platillo);
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
