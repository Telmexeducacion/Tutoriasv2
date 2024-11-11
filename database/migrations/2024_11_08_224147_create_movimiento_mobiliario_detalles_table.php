<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoMobiliarioDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_mobiliario_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('movimiento_mobiliario_id');
            $table->unsignedInteger('mobiliario_id');
            $table->timestamps();
            // Claves foráneas
            $table->foreign('movimiento_mobiliario_id')->references('id')->on('movimientos_mobiliarios')->onDelete('cascade');
            $table->foreign('mobiliario_id')->references('id')->on('mobiliarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimiento_mobiliario_detalles');
    }
}
