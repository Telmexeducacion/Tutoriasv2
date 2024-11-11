<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosEquipoDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos_equipo_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('movimiento_equipo_id')->unsigned();
            $table->bigInteger('equipo_id')->unsigned();
            $table->timestamps();
            $table->foreign('movimiento_equipo_id')->references('id')->on('movimientos_equipos')->onDelete('cascade');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos_equipo_detalles');
    }
}
