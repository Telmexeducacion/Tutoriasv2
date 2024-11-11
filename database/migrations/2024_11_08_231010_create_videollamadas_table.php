<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideollamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videollamadas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('tutor_id')->unsigned();
            $table->bigInteger('escuela_id')->unsigned();
            $table->bigInteger('turno_id')->unsigned()->nullable(); // Clave foránea opcional
            $table->bigInteger('estatus_id')->unsigned();
            $table->string('enlace')->nullable();
            $table->dateTime('programada_para'); // Fecha y hora programada
            $table->dateTime('realizada_en')->nullable(); // Fecha y hora de realización
            $table->integer('duracion')->unsigned()->nullable(); // Duración en minutos
            $table->longText('notas')->nullable(); // Observaciones o comentarios
            $table->longText('notas_Gerencia')->nullable(); // Observaciones o comentarios
            $table->timestamps();

              // Claves foráneas
              $table->foreign('tutor_id')->references('id')->on('tutores')->onDelete('cascade');
              $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
              $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('set null');
              $table->foreign('estatus_id')->references('id')->on('estatus_tutorias')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videollamadas');
    }
}
