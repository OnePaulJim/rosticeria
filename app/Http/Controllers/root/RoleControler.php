<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class RoleControler extends Controller
{
    public function index(){
        
        $all=Role::all();
        return view('root.roles.index',['all'=>$all]);
    }

}
