<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'=> 'Onesimo',
                'f_surname'=>'Jimenez',
                'l_surname'=>'Apale',
                'phone'=>'2721000799',
                'image'=>'',
                'email'=>'admin@gmail.com',
                'password'=>password_hash('admin', PASSWORD_DEFAULT,[15]),
                'role_id'=>1

            ]
            
        ]);
    }
}
