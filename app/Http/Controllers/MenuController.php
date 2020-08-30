<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MenuController;
use App\Menu;
use App\Platillo;
use App\PlatilloMenu;

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

    /**
     * Enable a menu.
     *
     * @param  \App\Menu  $id
     * @return \Illuminate\Http\Response
     */
    public function enable($id)
    {
        Menu::where('status', TRUE)
            ->update(['status' => FALSE]);
        
        Menu::where('id','=',$id)->update(['status' => TRUE]);
        return redirect('menus')->with('Mensaje','Menú activado.');
    }

    /**
     * Disable a menu.
     *
     * @param  \App\Menu  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        Menu::where('id','=',$id)->update(['status' => FALSE]);
        return redirect('menus')->with('Mensaje','Menú desactivado.');
    }

    
    public function assign($id){
        $menu = Menu::with('platillos')->findOrFail($id);
        $platillos = Platillo::all();
        return view('app.asignarmenuplatillo.index',[
            'menu' => $menu,
            'platillos' => $platillos
        ]);
    }

    public function relate(Request $request){
        $relations = $request->except('_token');
        $menu_id = $relations['menu_id'];
        unset($relations['menu_id']);

        // borrar todos los platillos
        PlatilloMenu::where('menu_id', $menu_id)->delete();

        //actualizar relaciones
        for ($i = 0; $i < count($relations); $i++) {
            $platillo_menu = array(
                'platillo_id' => key($relations),
                'menu_id' => $menu_id);
            PlatilloMenu::insert($platillo_menu);
            next($relations);
        }

        return redirect('menus/asignar/'.$menu_id)->with('Mensaje','Menú actualizado.');
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
        Menu::destroy($id);
        return redirect("menus");
    }

}
