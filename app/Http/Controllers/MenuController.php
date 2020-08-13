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
        //return view('menu.index',$datos);
        return view('menu.menu', $datos);
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
                //echo key($seleccion) . "=>" . $cantidad ."<br />";
            next($seleccion);
        }

        //Consultas a base de datos
        foreach ($seleccionFiltrada as $sel){
            //echo key($seleccionFiltrada);
            $idProductoSeleccionado = key($seleccionFiltrada);

            //$profession = DB::table('platillos')->whereId($idProductoSeleccionado);
            
            $platillo['data'] = Platillo::findOrFail($idProductoSeleccionado);
            
            //$try = DB::select('SELECT id FROM platillos WHERE id = ?', [11,14]);

            //echo json_encode($platillo);
            //echo "<br/>";
            next($seleccionFiltrada);
        }
        //$try['platillos'] = DB::select('select * from `platillos` where `id` in (11, 14) ');
        $try['platillos'] = Platillo::select('select * from `platillos` where `id` in (11, 14) ');
        echo json_encode($try);
        return view('menu.revisar');
    }

    public function domicilio()
    {
        return view('menu.domicilio');
    }

    public function ordenar(Request $request)
    {
        $seleccion=$request->except('_token'); //Elimino el token del array, no se usará.
        json_encode($seleccion);
        return view('menu.revisar');
    }
}
