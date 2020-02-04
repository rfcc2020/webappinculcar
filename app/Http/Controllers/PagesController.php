<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    public function index(){
        $notas = App\Nota::all();
        return view('welcome',compact('notas'));
    }
    public function fotos(){
    	return view("fotos");
    }
    public function nosotros($nombre = null){
    	$equipo = ['robin','ronny','caro','dome'];
    	return view("nosotros",compact('equipo','nombre'));
    }
    public function noticias()
    {
    	return view("blog");
    }
    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle',compact('nota'));
    }
    public function crear(Request $request){
        //return $request->All();
        $notaNueva = new App\Nota;
        echo $request->nombre;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save();
        return back()->with('mensaje','Nota agregada');
    }
}
