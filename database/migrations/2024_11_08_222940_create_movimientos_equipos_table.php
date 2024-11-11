<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('desde_escuela_id');
            $table->unsignedInteger('hacia_escuela_id');
            $table->unsignedInteger('solicitado_por');
            $table->unsignedInteger('aprobado_por')->nullable(); // Agregar nullable aquí
            $table->unsignedInteger('estado_id');
            $table->text('observaciones')->nullable();
            $table->timestamp('solicitado_en')->nullable();
            $table->timestamp('aprobado_en')->nullable();
            $table->timestamp('completado_en')->nullable();
            $table->timestamps();

            // Claves foráneas
            $table->foreign('desde_escuela_id')->references('id')->on('escuelas')->onDelete('restrict');
            $table->foreign('hacia_escuela_id')->references('id')->on('escuelas')->onDelete('restrict');
            $table->foreign('solicitado_por')->references('id')->on('tutores')->onDelete('cascade');
            $table->foreign('aprobado_por')->references('id')->on('users')->onDelete('set null'); // Corregido: onDelete('set null')
            $table->foreign('estado_id')->references('id')->on('estado_movimientos')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos_equipos');
    }
}
