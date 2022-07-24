<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use Carbon\Carbon;

class ProductoController extends Controller
{

    public function index(){
        
        $all=Producto::all();
        return view('root.productos.index',['all'=>$all]);
    }

    public function create(){

        $all=Categoria::all();

        return view('root.productos.create',['all'=>$all]);

    }


    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|max:60|string',
            'tipo' => 'string',
            'cantidad' => 'required|numeric',
            'imagen' =>'image|max:1000',
            'id_categoria' => 'required|digits_between:1,10',
            'precio' => 'required|numeric',

        ]);

        
        

        

        $newProducto=new Producto;

        //ernProductoew->name = aqui va el nombre de la variabl
        $newProducto->nombre = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $newProducto->tipo = $request->tipo;
        $newProducto->cantidad = $request->cantidad;
        $newProducto->id_categoria=$request->id_categoria;
        $newProducto->precio=$request->precio;
        

        if(isset($request->imagen)){
            $file=$request->file('imagen')->store('productos');

            $newProducto->image=$file;
        }

        $newProducto->created_at=now();
        $newProducto->updated_at=now();
        
        /*
        $newProducto->password= Hash::make($request->password);
        $newProducto->image= $request->file;
        $newProducto->role_id=$request->rol;
        */
        $newProducto->save();

        
        return redirect()->action('Root\ProductoController@index')->with('status','Producto creado con éxito');


    }


    
    public function edit($id){

        $producto=decrypt($id);

        $all=Producto::find($producto);
        $all2=Categoria::all();

        return view('root.productos.edit',['all'=>$all, 'all2'=>$all2]);

    }

    public function update(Request $request, $id){

        $producto= decrypt($id);

        $request->validate([
            'nombre' => 'required|max:60|string',
            'tipo' => 'string',
            'cantidad' => 'required|numeric',
            'imagen' =>'image|max:1000',
            'id_categoria' => 'required|digits_between:1,10',
            'precio' => 'required|numeric',

        ]);

        $newProducto=Producto::find($producto);
        //$usernew->name = aqui va el nombre de la variable
        
        $newProducto->nombre = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $newProducto->tipo = $request->tipo;
        $newProducto->cantidad = $request->cantidad;
        $newProducto->id_categoria=$request->id_categoria;
        $newProducto->precio=$request->precio;

        if(isset($request->imagen)){
            $file=$request->file('imagen')->store('productos');

            $newProducto->image= $file;
        }


        $newProducto->save();

        return redirect()->action('Root\ProductoController@index')->with('status','Producto editado con éxito');

    }


    public function destroy($id){
        $producto=decrypt($id);
        $productoDelete=Producto::find($producto);
        $productoDelete->delete();

        return redirect()->action('Root\ProductoController@index')->with('status','Producto eliminado');

    }



}
