<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('equipo_id')->unsigned();
            $table->string('accion', 100); // Ejemplos: Mantenimiento, Reparación, Actualización
            $table->text('descripcion')->nullable();
            $table->text('realizado_por')->nullable();
            $table->date('fecha_accion');
            $table->timestamps();

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
        Schema::dropIfExists('historial_equipos');
    }
}
