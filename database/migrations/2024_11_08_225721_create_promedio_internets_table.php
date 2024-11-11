<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromedioInternetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promedio_internet', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('escuela_id');
            $table->tinyInteger('mes')->unsigned(); // Mes (1-12)
            $table->smallInteger('año')->unsigned(); // Año
            $table->decimal('gb_recibidos', 10, 2); // Gigabytes recibidos
            $table->decimal('gb_enviados', 10, 2); // Gigabytes enviados
            $table->decimal('promedio', 10, 2)->nullable(); // Promedio de consumo al mes
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
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
        Schema::dropIfExists('promedio_internets');
    }
}
