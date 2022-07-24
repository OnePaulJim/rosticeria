<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Paquete;
use App\Producto;

use Illuminate\Support\Facades\Hash;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /*public function index()
    {
        return view('home');
    }*/
    public function index()
    {
        $listaPaquetes=Paquete::all();
        $listaProductos=Producto::all();
        return view('home',['listaPaquetes'=>$listaPaquetes, 'listaProductos'=>$listaProductos]);

    }
    
/*
    public function create(){

        $all=Role::all();

        return view('clientes.create',['all'=>$all]);

    }*/

    public function edit($id){

        $paquete=decrypt($id);

        

        $all=Paquete::find($paquete);
        
        //return view('home2');
        return view('root.pedidos.create',['all'=>$all]);

    }

    
    
}
