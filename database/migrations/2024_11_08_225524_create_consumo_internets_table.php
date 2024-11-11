<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumoInternetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumo_internets', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('linea_id')->unsigned();
            $table->tinyInteger('mes')->unsigned(); // Mes (1-12)
            $table->smallInteger('año')->unsigned(); // Año
            $table->decimal('gb_recibidos', 10, 2); // Gigabytes recibidos
            $table->decimal('gb_enviados', 10, 2); // Gigabytes enviados
            $table->decimal('promedio', 10, 2)->nullable(); // Promedio de consumo al mes
            $table->timestamps();
            $table->foreign('linea_id')->references('id')->on('lineas')->onDelete('cascade');
             // Índice único para evitar duplicados
             $table->unique(['linea_id', 'mes', 'año'], 'unique_consumo_internet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumo_internets');
    }
}
