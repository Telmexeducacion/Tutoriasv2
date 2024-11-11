<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientoCambiosSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_cambios_sedes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipo_id');
            $table->unsignedInteger('sede_anterior_id');
            $table->unsignedInteger('sede_nueva_id');
            $table->timestamp('fecha_cambio')->useCurrent();
            $table->unsignedInteger('usuario_id');
            $table->text('motivo')->nullable();
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos_sede')->onDelete('cascade');
            $table->foreign('sede_anterior_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('sede_nueva_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimiento_cambios_sedes');
    }
}
