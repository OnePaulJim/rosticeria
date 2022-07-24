<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        
        $all=User::all();
        return view('root.user.index',['all'=>$all]);
    }
    //

    public function create(){

        $all=Role::all();

        return view('root.user.create',['all'=>$all]);

    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|max:60|string',
            'apellido_paterno' => 'required|max:60|string',
            'apellido_materno' => 'required|max:60|string',
            'telefono' => 'required|max:20',
            'email' => 'required|string|email|max:100|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
            'imagen' =>'image|max:1000',
            'rol' => 'required|numeric|digits_between:1,20',

        ]);

        $file=$request->file('imagen')->store('user');

        $usernew=new User;
        //$usernew->name = aqui va el nombre de la variable
        
        $usernew->name = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $usernew->f_surname = mb_convert_case($request->apellido_paterno,MB_CASE_TITLE,"UTF-8");
        $usernew->l_surname = mb_convert_case($request->apellido_materno,MB_CASE_TITLE,"UTF-8");
        $usernew->phone=$request->telefono;
        $usernew->email=$request->email;
        $usernew->image=$file;
        $usernew->password= Hash::make($request->password);
        $usernew->role_id=$request->rol;
        $usernew->save();

        
        return redirect()->action('Root\UserController@index')->with('status','Usuario creado con éxito');


    }


    public function edit($id){

        $user=decrypt($id);

        $all=User::find($user);
        $all2=Role::all();

        return view('root.user.edit',['all'=>$all, 'all2'=>$all2]);

    }

    public function update(Request $request, $id){

        $user= decrypt($id);

        $request->validate([
            'nombre' => 'required|max:60|string',
            'apellido_paterno' => 'required|max:60|string',
            'apellido_materno' => 'required|max:60|string',
            'telefono' => 'required|max:20',
            'email' => 'required|string|email|max:100',
            'imagen' =>'image|max:1000',
            'rol' => 'required|numeric|digits_between:1,20',

        ]);

        $userUpdate=User::find($user);
        //$usernew->name = aqui va el nombre de la variable
        
        $userUpdate->name = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $userUpdate->f_surname = mb_convert_case($request->apellido_paterno,MB_CASE_TITLE,"UTF-8");
        $userUpdate->l_surname = mb_convert_case($request->apellido_materno,MB_CASE_TITLE,"UTF-8");
        $userUpdate->phone=$request->telefono;
        $userUpdate->email=$request->email;
//        $userUpdate->password= Hash::make($request->password);

        if(isset($request->imagen)){
            $file=$request->file('imagen')->store('user');

            $userUpdate->image= $file;
        }
        
       
        $userUpdate->role_id=$request->rol;
        $userUpdate->save();

        return redirect()->action('Root\UserController@index')->with('status','Usuario editado con éxito');

    }

    public function destroy($id){
        $user=decrypt($id);
        $userDelete=User::find($user);
        $userDelete->delete();

        return redirect()->action('Root\UserController@index')->with('status','Usuario eliminado');

    }
}
