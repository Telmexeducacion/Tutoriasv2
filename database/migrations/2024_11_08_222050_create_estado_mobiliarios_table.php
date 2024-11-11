<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_mobiliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->unique(); // Ejemplos: Entregado Inicialmente, Funcional, Dañado, Baja
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
        Schema::dropIfExists('estado_mobiliarios');
    }
}
