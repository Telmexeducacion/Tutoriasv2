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
            $table->string('nombre', 100);
            $table->string('resa', 20)->nullable();
            $table->string('serie', 50);
            $table->unsignedInteger('marca_id');
            $table->unsignedInteger('modelo_id');
            $table->string('procesador', 50);
            $table->string('velocidad_procesador', 20);
            $table->integer('ram');
            $table->integer('dd')->nullable();
            $table->unsignedInteger('sistema_operativo_id');
            $table->unsignedInteger('sede_id');
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('sistema_operativo_id')->references('id')->on('sistemas_operativos')->onDelete('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
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
