<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([

            [
              'name'=>'Administrador',
              'created_at'=>date("Y-m-d H:i_s"),
              'updated_at'=>date("Y-m-d H:i_s"), 
            ],
            [
              'name'=>'Cliente',
              'created_at'=>date("Y-m-d H:i_s"),
              'updated_at'=>date("Y-m-d H:i_s"), 
            ]
            ]);
    }
}
