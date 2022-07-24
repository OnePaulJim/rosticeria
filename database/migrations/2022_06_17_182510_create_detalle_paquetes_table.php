<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_paquetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_paquete');
            $table->unsignedbigInteger('id_producto');
            $table->string('estado',10);
            $table->string('entero',1);
            $table->float('cantidad',8);
            $table->float('precio',8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_paquetes');
    }
}
