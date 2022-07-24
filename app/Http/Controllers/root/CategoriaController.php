<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Categoria;

class CategoriaController extends Controller
{
    
    public function index(){
        
        //$all=Categoria::all(); //SELECT MAX(id),nombre,descripcion FROM `categorias` ->Paginate(2)
        $all=Categoria:: all(); 

        return view('root.categorias.index',['all'=>$all]);
    }

    public function create(){

        $all=Categoria::all();

        return view('root.categorias.create',['all'=>$all]);

    }


    public function store(Request $request){

        $request->validate([
            'Nombre' => 'required|max:60|string',
            'Descripcion'=>'required|max:60|string',

        ]);


        $Categorianew = new Categoria;
        
        $Categorianew->nombre = mb_convert_case($request->Nombre,MB_CASE_TITLE,"UTF-8");
        $Categorianew->descripcion = $request->Descripcion;
        $Categorianew->created_at = now();
        $Categorianew->save();
        
        return redirect()->action('Root\CategoriaController@index')->with('status','Categoria creada con éxito');
    }

    public function edit($id){
        $categoria = decrypt($id);
        $all= Categoria::find($categoria);
       
 
        return view('root.categorias.edit',['all'=>$all]);
    }
 public function update(Request $request, $id){
     $categoria = decrypt($id);
     $request->validate([
     'Nombre'=>'required|string',
     'Descripcion'=>'required|max:60]string',
 
 ]);
 $categoriaupdate =  Categoria::find($categoria);
 $categoriaupdate->nombre=mb_convert_case($request->Nombre,MB_CASE_TITLE,"UTF-8");
 $categoriaupdate->descripcion= mb_convert_case($request->Descripcion,MB_CASE_TITLE,"UTF-8");

 $categoriaupdate->save();
 return redirect()->action('Root\CategoriaController@index')->with('status', 'Categoria editada exitosamente');
 
 }
 
 public function destroy ($id){
     $categoria = decrypt ($id);
     $categoriadelete= Categoria::find($categoria);
     $categoriadelete->delete();
 
     return redirect()->action('Root\CategoriaController@index')->with('status', 'Categoria eliminada exitosamente');
 }

}