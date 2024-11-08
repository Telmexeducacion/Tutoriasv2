<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialProgresoSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_progreso_solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('solicitud_id');
            $table->date('fecha');
            $table->text('comentario');
            $table->boolean('tema_garantia')->default(false);
            $table->timestamps();

            $table->foreign('solicitud_id')->references('id')->on('solicitudes_servicio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_progreso_solicituds');
    }
}
