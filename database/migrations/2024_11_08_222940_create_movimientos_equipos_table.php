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
            $table->bigInteger('desde_escuela_id')->unsigned();
            $table->bigInteger('hacia_escuela_id')->unsigned();
            $table->bigInteger('solicitado_por')->unsigned();
            $table->bigInteger('aprobado_por')->unsigned()->nullable();
            $table->tinyInteger('estado_id')->unsigned();
            $table->text('observaciones')->nullable();
            $table->timestamp('solicitado_en')->nullable();
            $table->timestamp('aprobado_en')->nullable();
            $table->timestamp('completado_en')->nullable();
            $table->timestamps();

            // Claves foráneas
            $table->foreign('desde_escuela_id')->references('id')->on('escuelas')->onDelete('restrict');
            $table->foreign('hacia_escuela_id')->references('id')->on('escuelas')->onDelete('restrict');
            $table->foreign('solicitado_por')->references('id')->on('tutores')->onDelete('cascade');
            $table->foreign('aprobado_por')->references('id')->on('users')->onDelete('set null');
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
