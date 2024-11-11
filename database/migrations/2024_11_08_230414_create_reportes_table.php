<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tutor_id');
            $table->unsignedInteger('escuela_id');
            $table->unsignedInteger('turno_id')->nullable(); // Turno es opcional
            $table->string('titulo', 255); // Título del reporte
            $table->text('descripcion'); // Detalles de la incidencia
            $table->unsignedInteger('estado_id'); // Estado del reporte
            $table->timestamps();

             // Claves foráneas
             $table->foreign('tutor_id')->references('id')->on('tutores')->onDelete('cascade');
             $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
             $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('set null');
             $table->foreign('estado_id')->references('id')->on('estado_reportes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}
