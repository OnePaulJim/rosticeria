<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_categoria');
            $table->string('nombre');
            $table->string('tipo',12);
            $table->float('cantidad',8);
            $table->float('precio',8);
            $table->string('image')->nullable();
            $table->timestamps();
        });

        /*
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('f_surname',45);
            $table->string('l_surname',45);
            $table->string('phone',12);
            $table->string('image')->nullable(); 
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedbigInteger('role_id');
            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
