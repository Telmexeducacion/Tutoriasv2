<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables_turno', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('turno_id')->unsigned();
            $table->string('nombre', 255);
            $table->string('cargo', 255); // Cargo del responsable (Director, Encargado del Aula)
            $table->string('telefono', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('correo', 255)->nullable();
            $table->timestamps();
            $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables_turnos');
    }
}
