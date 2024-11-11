<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_mobiliario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->unique(); // Mesa circular, Mesa rectangular, Silla apilable, Mueble de resguardo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_mobiliarios');
    }
}
