<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paquete;
use App\DetallePaquete;

class PaqueteController extends Controller
{
    //
    public function index(){
        
        $all=Paquete::all();
        return view('root.paquetes.index',['all'=>$all]);
    }

    public function create(){

        $all=Paquete::all();

        return view('root.paquetes.create',['all'=>$all]);

    }


    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|max:80|string',
            //'descripcion' => 'max:150|string',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
            //'imagen' =>'image|max:1000',
            
        ]);

        
        
        $new=new Paquete;

        //eroew->name = aqui va el nombre de la variabl
        $new->nombre = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $new->descripcion = mb_convert_case($request->descripcion,MB_CASE_TITLE,"UTF-8");
        $new->cantidad = $request->cantidad;
        $new->precio=$request->precio;

        if(isset($request->imagen)){
            $file=$request->file('imagen')->store('paquetes');

            $new->image= $file;
        }


        $new->save();

        
        return redirect()->action('Root\PaqueteController@index')->with('status','Paquete creado con éxito');


    }


    public function edit($id){

        $paquete=decrypt($id);

        $all=Paquete::find($paquete);
        //$all2=Categoria::all();

        return view('root.paquetes.edit',['all'=>$all]);

    }


    public function update(Request $request, $id){

        $paquete= decrypt($id);

        $request->validate([
            'nombre' => 'required|max:80|string',
            //'descripcion' => 'max:150|string',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
            //'imagen' =>'image|max:1000',

        ]);

        $newEdit=Paquete::find($paquete);
        //$usernew->name = aqui va el nombre de la variable
        
        $newEdit->nombre = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $newEdit->descripcion = mb_convert_case($request->descripcion,MB_CASE_TITLE,"UTF-8");
        $newEdit->cantidad = $request->cantidad;
        $newEdit->precio=$request->precio;
        if(isset($request->imagen)){
            $file=$request->file('imagen')->store('paquetes');

            $newEdit->image= $file;
        }

        
        $newEdit->save();

        return redirect()->action('Root\PaqueteController@index')->with('status','Paquete editado con éxito');

    }

    public function destroy($id){
        $paquete=decrypt($id);
        $paqueteDelete=Paquete::find($paquete);
        $paqueteDelete->delete();

        return redirect()->action('Root\PaqueteController@index')->with('status','Paquete eliminado');

    }
}
