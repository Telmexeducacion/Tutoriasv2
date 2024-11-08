<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ciudad', 100);
            $table->string('codigo_postal', 10);
            $table->string('edificio', 50);
            $table->string('piso', 10);
            $table->string('horario', 50);
            $table->unsignedInteger('director_id');
            $table->timestamps();

            $table->foreign('director_id')->references('id')->on('directores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sedes');
    }
}
