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
        Menu::where('id','=',$id)->update(['status' => 'on']);
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
        Menu::where('id','=',$id)->update(['status' => NULL]);
        return redirect('menus')->with('Mensaje','Menú desactivado.');
    }

    
    public function assign($id){
        $menues['menues'] = Menu::findOrFail($id);
        $platillos = Platillo::all();
        return view('app.asignarmenuplatillo.index',[
            'menues' => $menues,
            'platillos' => $platillos
        ]);
    }

    public function relate(Request $request){
        //for para guardar uno por uno
        //$platillo_menu = array('platillo_id', 'menu_id')
        //PlatilloMenu::insert($platillo_menu)
        $relations = $request->except('_token');
       
        $menu_id = $relations['menu_id'];
        unset($relations['menu_id']);

        for ($i = 1; $i <= count($relations); $i++) {
            //echo key($relations) . "<br/>";
            $platillo_menus = array(key($relations), $menu_id);
            PlatilloMenu::insert($platillo_menus);
            next($relations);
            
        }
        echo "verificar BD";
        //echo json_encode($relations);
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
