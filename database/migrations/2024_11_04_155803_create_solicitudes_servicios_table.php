<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipo_id')->nullable();
            $table->unsignedInteger('sede_id');
            $table->unsignedInteger('gadget_id')->nullable();
            $table->text('descripcion');
            $table->enum('estado', ['abierto', 'en progreso', 'cerrado']);
            $table->string('codigo_aprobacion', 20)->nullable();
            $table->date('fecha_apertura');
            $table->date('fecha_cierre')->nullable();
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos_sede')->onDelete('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('gadget_id')->references('id')->on('gadgets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes_servicios');
    }
}
