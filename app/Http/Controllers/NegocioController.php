<?php

namespace App\Http\Controllers;

use App\Negocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        
        //$negocio = DB::table('negocio')->first();
        //dd($negocio);
        //if ($negocio == null)
         //   return view('admin.negocio.create'); //Si es null cargar create
        //Cargar edit, ya que no se cumple al anterior.
        //return view('admin.negocio.edit', compact($negocio));
        return view('app.negocio.index');
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
            
        Negocio::insert($negocio);

        return json_encode($negocio);

    }
}
