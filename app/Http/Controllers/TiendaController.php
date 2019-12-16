<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class TiendaController extends Controller
{
    public function index(Request $request){
    // categorias 
     $categorias = Categoria::all();
     
    // productos
    $productos = Producto::search($request->name)->orderBy('id', 'DESC')->paginate(8);
     
    return view('tienda.inicio', compact('categorias', 'productos'));   
    }


    // funcion para ver las categorias
    public function vercategoria($id){
    // categorias 
     $categorias = Categoria::all();

    $productos = DB::table('productos')->where('categoria_id', $id)->paginate(8);
    return view('tienda.inicio', compact('productos', 'categorias'));   
    }


    public function detalle($id){
    $producto = Producto::find($id);

    // devolver productos relacionados
    $detalle = DB::table('productos')->where('categoria_id', $producto->categoria_id)->paginate(6);
    return view('tienda.detalle', compact('producto','detalle'));       
    }
}
