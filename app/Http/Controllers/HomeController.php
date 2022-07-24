<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use App\User;
use App\Producto;
use App\Role;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
    public function index()
    {
        return view('home');
    }*/

    public function index2()
    {
        return view('nosotros');
    }


    


    public function index(){
        
        $listaPaquetes=Paquete::all();
        $listaProductos=Producto::all();
        return view('home',['listaPaquetes'=>$listaPaquetes, 'listaProductos'=>$listaProductos]);
        //return view('home2');
    }

    public function create(){

        $all=Role::all();

        return view('clientes.create',['all'=>$all]);

    }


    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|max:60|string',
            'apellido_paterno' => 'required|max:60|string',
            'apellido_materno' => 'required|max:60|string',
            'telefono' => 'required|max:20',
            'email' => 'required|string|email|max:100|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
            
            //'rol' => 'required|numeric|digits_between:1,20',

        ]);

       

        $usernew=new User;
        //$usernew->name = aqui va el nombre de la variable
        
        $usernew->name = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $usernew->f_surname = mb_convert_case($request->apellido_paterno,MB_CASE_TITLE,"UTF-8");
        $usernew->l_surname = mb_convert_case($request->apellido_materno,MB_CASE_TITLE,"UTF-8");
7+        $usernew->phone=$request->telefono;
        $usernew->email=$request->email;
        $usernew->password= Hash::make($request->password);
        $usernew->role_id='2';
        $usernew->save();

        
        return redirect()->action('Root\ClienteController@index')->with('status','Usuario creado con éxito');


    }



}
