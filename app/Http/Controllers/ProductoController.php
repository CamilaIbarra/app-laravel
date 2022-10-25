<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller {
    public function index(){
        // $productos = Producto::where('categoria_id', 1)
        // ->orderBy('descripcion', 'asc')->get();

        $productos = Categoria::find(1)->productos()->get();
        return view('productos.index', ['lista' => $productos]);
    }

    public function show($nombre){
        return view('productos.show', ['producto' => $nombre]);
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){
        
        $validacion = $request->validate([
            'codigo' => 'required|unique:productos',
            'nombre' => 'required',
            'precio' => 'required'
        ]);

        $producto = new Producto();
        $producto->codigo = $request->input('codigo');
        $producto->descripcion = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->existencia = 0;
        $producto->categoria_id = 1;
        $producto->activo = 1;
        $producto->save();

        return ("Registro guardado!");
    }

    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.edit', ['id' =>$id, 'producto' => $producto]);
    }

    public function update(Request $request, $id){

        $validacion = $request->validate([
            'codigo' => 'required|unique:productos',
            'nombre' => 'required',
            'precio' => 'required'
        ]);

        $producto = Producto::find($id);
        $producto->descripcion = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->save();

        return ("Registro modificado!");
    }

    public function destroy($id){
        $producto = Producto::find($id);
        $producto->delete();
        echo "Registro $id eliminado";
    }
}