<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MenuController;
use App\Menu;

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
        $datos['menus'] = Menu::paginate(50);
        return view('app.menus.index', $datos);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = $request->except('_token');
        Menu::insert($menu);
        return redirect("menus")->with('Mensaje','Menú agregado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('app.menus.editar', compact('menu'));
    }

    public function enable($id)
    {
        $menu = Menu::findOrFail($id);
        Menu::where('id','=',$id)->update(['status' => 'on']);
        return redirect('menus')->with('Mensaje','Menú activado.');
    }

    public function disable($id)
    {
        $menu = Menu::findOrFail($id);
        Menu::where('id','=',$id)->update(['status' => NULL]);
        return redirect('menus')->with('Mensaje','Menú desactivado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        //if(Storage::delete('public/'.$platillo->imagen)){
        Menu::destroy($id);
        //}
        return redirect("menus");
    }

}
