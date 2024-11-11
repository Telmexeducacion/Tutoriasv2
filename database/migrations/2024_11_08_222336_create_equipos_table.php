<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipo_equipo_id');
            $table->unsignedInteger('escuela_id');
            $table->string('numero_serie', 100)->unique();
            $table->string('numero_inventario', 100)->nullable();
            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->unsignedInteger('estado_id');
            $table->integer('ram_gb')->nullable();
            $table->integer('almacenamiento_gb')->nullable();
            $table->string('procesador', 100)->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();


            // Claves foráneas
            $table->foreign('tipo_equipo_id')->references('id')->on('tipo_equipo')->onDelete('restrict');
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado_equipos')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
