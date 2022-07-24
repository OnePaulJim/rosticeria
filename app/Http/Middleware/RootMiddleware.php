<?php

namespace App\Http\Middeleware;
use Closure;
use Auth;

class RootMiddleware{

    public function hadle($request, Closure $next){
        
        $use=Auth::user();

        if(@$user->role_id=='1'){

            return $next($request);
        
        }
        else{

            Auth::logout();
            return redirect('/');
//php artisan make:seeder UserSeeder
        }
    }
}
?>