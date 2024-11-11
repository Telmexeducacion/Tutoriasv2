<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondicionesEdificiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condiciones_edificios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('escuela_id');
            $table->date('fecha_evaluacion'); // Fecha de la evaluación
            $table->tinyInteger('estado_pintura')->unsigned(); // Escala numérica (1-5)
            $table->boolean('problemas_estructurales')->default(false); // Indica si hay problemas estructurales
            $table->boolean('pintura_proyecto')->default(false); // Indica si cuenta con pintura del proyecto
            $table->boolean('problemas_energia')->default(false); // Indica si hay problemas de energía
            $table->boolean('contactos_adecuados')->default(false); // Indica si los contactos de luz son adecuados
            $table->text('observaciones')->nullable(); // Comentarios adicionales
            $table->timestamps();
            // Clave foránea
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condiciones_edificios');
    }
}
