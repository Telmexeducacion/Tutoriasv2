<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatusTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_tutorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255); // Ejemplos: Agendada, Re-agendado, Cancelada
            $table->timestamps();
            $table->unique('nombre', 'unique_nombre_estatus_tutoria');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estatus_tutorias');
    }
}
