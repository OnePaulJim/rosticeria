<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_usuario');
            $table->unsignedbigInteger('id_paquete');
            $table->float('cantidad',8);
            $table->float('precio',8);
            $table->string('forma_pago',1);
            $table->string('folio',9)->unique();
            $table->string('imagen')->nullable();
            $table->string('status',1);
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
        Schema::dropIfExists('pedidos');
    }
}
