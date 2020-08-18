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
        return view('app.index', $datos);
    }

    public function revisar(Request $request)
    {
        $seleccion=$request->except('_token');
        
        $productosSeleccionados = array();
        $cantidadesSeleccionadas = array();

        foreach ($seleccion as $cantidad){
            if($cantidad <> "0"){
                array_push($productosSeleccionados, key($seleccion));
                array_push($cantidadesSeleccionadas, $cantidad);
            }
            next($seleccion);
        }

        $orden = "";
        $total = 0;
        
        $domicilio = "Para enviarse a la siguiente dirección:".PHP_EOL."Calle: ";
        $domicilio = $domicilio . $seleccion['calle'] . " " . $seleccion['numero'] . " " . $seleccion['colonia'] .PHP_EOL;
        $domicilio = $domicilio . $seleccion['referencia'];
        $cel = PHP_EOL."Contacto: ".$seleccion['celular'];
        
        $mensaje = "Hola, soy ".$seleccion['contacto']." y mi orden es:".PHP_EOL.PHP_EOL;
        unset($seleccion['contacto'], $seleccion['calle'], $seleccion['numero'], $seleccion['colonia'], $seleccion['referencia'], $seleccion['celular']);
        
        $s = $productosSeleccionados;
        foreach ($s as $v) {
            if($v == "contacto")
                unset($productosSeleccionados[key($s)]);
            if($v == "calle")
                unset($productosSeleccionados[key($s)]);
            if($v == "numero")
                unset($productosSeleccionados[key($s)]);
            if($v == "colonia")
                unset($productosSeleccionados[key($s)]);
            if($v == "referencia")
                unset($productosSeleccionados[key($s)]);
            if($v == "celular")
                unset($productosSeleccionados[key($s)]);
            next($s);
        }

        for($i=0; $i<count($productosSeleccionados); $i++){
            $plato = DB::table('platillos')->where('id', strval($productosSeleccionados[$i]))->first();
            $linea = strval($cantidadesSeleccionadas[$i]) . " x " .$plato->nombre. " ($". strval(intval($plato->precio)*$cantidadesSeleccionadas[$i]).")".PHP_EOL;
            $total = $total + (intval($plato->precio)*$cantidadesSeleccionadas[$i]);
            $orden = $orden . $linea;
        }
        $mensaje = $mensaje . $orden . "Total: $". $total .PHP_EOL.PHP_EOL.$domicilio . $cel;
        return view('menu.revisar', ['mjs' => $mensaje]);
    }

    public function domicilio()
    {
        return view('menu.domicilio');
    }

    public function ordenar(Request $request)
    {
        $seleccion=$request->except('_token'); //Elimino el token del array, no se usará.
        json_encode($seleccion);
        //return view('menu.revisar');
    }
}
