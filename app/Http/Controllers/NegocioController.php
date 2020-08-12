<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.negocio');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $negocio = $request->except('_token');
        
        if($request->hasFile('imagenPortada')){
            $negocio['imagenPortada'] = $request->file('imagenPortada')->store('uploads','public');
        }

        if($request->hasFile('imagenPerfil')){
            $negocio['imagenPerfil'] = $request->file('imagenPerfil')->store('uploads','public');
        }

        Negocio::insert($negocio);

        return json_encode($negocio);

    }
}
