<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertasTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas_tutorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 50); // Tipo de alerta (Internet, Equipo, etc.)
            $table->text('descripcion'); // Detalles de la alerta
            $table->unsignedInteger('escuela_id')->nullable(); // Referencia opcional a la escuela
            $table->boolean('leida')->default(false); // Indica si la alerta ha sido leída
            $table->timestamps();
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alertas_tutorias');
    }
}
