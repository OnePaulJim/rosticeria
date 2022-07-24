<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            [
                'nombre'=> 'Comida',
                'descripcion'=>'descripcion 1'
                /*
                'l_surname'=>'Apale',
                'phone'=>'2721000799',
                'image'=>'image',
                'email'=>'admin@gmail.com',
                'password'=>password_hash('admin', PASSWORD_DEFAULT,[15]),
                'role_id'=>1*/

            ],

            [
                'nombre'=> 'Bebidas',
                'descripcion'=>'descripcion 2'
                /*
                'l_surname'=>'Apale',
                'phone'=>'2721000799',
                'image'=>'image',
                'email'=>'admin@gmail.com',
                'password'=>password_hash('admin', PASSWORD_DEFAULT,[15]),
                'role_id'=>1*/

            ]
            
        ]);
    }
}
