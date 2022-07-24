<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
//    return view('welcome');
    return view('home');
});*/


Route::get('/newCliente', function () {
    //    return view('welcome');
        return view('clientes.create');
    });

Route::get('/en_desarrollo', function () {
        //    return view('welcome');
            return view('home2');
        });

Auth::routes(['register'=>false]);

Route::group(['Middleware'=>['auth']],function(){

        
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', 'HomeController@index')->name('home');

   //se agregaron las siguientes rutas para redireccionar a la vista nosotros
    Route::get('nosotros', 'HomeController@index2')->name('home');
    
    Route::group(['Middleware'=>['root']], function(){
        Route::prefix('root')->group(function(){
            
            Route::prefix('user')->group(function(){
                Route::resources(['all'=>'Root\UserController']);
            });

            Route::prefix('rol')->group(function(){
                Route::resources(['all'=>'Root\RoleControler']);
            });

            Route::prefix('producto')->group(function(){
                Route::resources(['all'=>'Root\ProductoController']);
            });

            Route::prefix('cliente')->group(function(){
                Route::resources(['all'=>'Root\ClienteController']);
            });

            Route::prefix('categoria')->group(function(){
                Route::resources(['all'=>'Root\CategoriaController']);
            });


            Route::prefix('paquete')->group(function(){
                Route::resources(['all'=>'Root\PaqueteController']);
            });

            Route::prefix('pedido')->group(function(){
                Route::resources(['all'=>'Root\PedidoController']);
            });

            Route::prefix('new')->group(function(){
                Route::resources(['all'=>'HomeController']);
            });


            

            

        });
    });



});

    



