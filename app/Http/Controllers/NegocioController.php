<?php

namespace App\Http\Controllers;

use App\Negocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NegocioController extends Controller
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
        $datos['negocios'] = Negocio::all();
        if($datos != NULL){
            //Tiene datos, se llama a la edición
            return view('app.negocio.editar', $datos);
        }
        else{
            //No tiene datos se agregarán
            return view('app.negocio.index');
        }
                
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $negocio = request()->except(['_token','_method']);

        if($request->hasFile('logo')){
            $neg = Negocio::findOrFail($id);
            Storage::delete('public/'.$neg->logo);
            $negocio['logo'] = $request->file('logo')->store('uploads','public');
        }

        if($request->hasFile('cover')){
            $neg = Negocio::findOrFail($id);
            Storage::delete('public/'.$neg->cover);
            $negocio['cover'] = $request->file('cover')->store('uploads','public');
        }
        Negocio::where('id','=',$id)->update($negocio);
        return redirect('negocio')->with('Mensaje','Tus datos han sido actualizados.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $datos['negocios'] = Negocio::all();
        //echo var_dump($datos);
        return view('app.negocio.editar', $datos);
    }
}
