<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGadgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('resa', 20)->nullable();
            $table->string('numero_serie', 50);
            $table->unsignedInteger('marca_id');
            $table->unsignedInteger('modelo_id');
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gadgets');
    }
}
