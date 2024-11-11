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
            $table->bigInteger('tutor_id')->unsigned();
            $table->bigInteger('escuela_id')->unsigned();
            $table->bigInteger('turno_id')->unsigned()->nullable(); // Turno es opcional
            $table->string('titulo', 255); // Título del reporte
            $table->text('descripcion'); // Detalles de la incidencia
            $table->tinyInteger('estado_id')->unsigned(); // Estado del reporte
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
