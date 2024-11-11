<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('tipo_mobiliario_id')->unsigned();
            $table->bigInteger('escuela_id')->unsigned();
            $table->string('numero_inventario', 100)->nullable();
            $table->tinyInteger('estado_id')->unsigned();
            $table->text('descripcion')->nullable();
            $table->timestamps();


            // Claves foráneas
            $table->foreign('tipo_mobiliario_id')->references('id')->on('tipo_mobiliario')->onDelete('restrict');
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado_mobiliarios')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiliarios');
    }
}