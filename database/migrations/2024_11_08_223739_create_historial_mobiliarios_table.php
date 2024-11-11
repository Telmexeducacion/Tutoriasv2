<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_mobiliario', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mobiliario_id');
            $table->string('accion', 100); // Ejemplos: Mantenimiento, Reparación, Movimiento
            $table->text('descripcion')->nullable();
            $table->text('realizado_por')->nullable();
            $table->date('fecha_accion');
            $table->timestamps();
            // Claves foráneas
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
        Schema::dropIfExists('historial_mobiliarios');
    }
}
