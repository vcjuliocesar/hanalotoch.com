<?php

namespace App\Http\Controllers;

use App\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatilloController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['platillos'] = Platillo::paginate(50);
        return view('admin.platillo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.platillo.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $platilloData = $request->except('_token');
        
        if($request->hasFile('imagen')){
            $platilloData['imagen'] = $request->file('imagen')->store('uploads','public');
        }

        Platillo::insert($platilloData);
        return redirect("platillos")->with('Mensaje','Platillo agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platillo = Platillo::findOrFail($id);
        return view('admin.platillo.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPlatillo = request()->except(['_token','_method']);


        if($request->hasFile('imagen')){
            $platillo = Platillo::findOrFail($id);
            Storage::delete('public/'.$platillo->imagen);
            $datosPlatillo['imagen'] = $request->file('imagen')->store('uploads','public');
        }

        Platillo::where('id','=',$id)->update($datosPlatillo);

        //Lineas temporales, se cambiaran mas adelante.
       // $platillo = Platillo::findOrFail($id);
        //return view('admin.platillo.edit', compact('platillo'));
        return redirect('platillos')->with('Mensaje','Platillo modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $platillo = Platillo::findOrFail($id);
        if(Storage::delete('public/'.$platillo->imagen)){
            Platillo::destroy($id);
        }
        
        return redirect("platillos");
    }
}
