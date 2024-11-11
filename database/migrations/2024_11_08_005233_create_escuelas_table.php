<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('codigo', 50)->unique(); // Clave única de la escuela
            $table->string('direccion', 255);
            $table->unsignedInteger('estado_id');
            $table->unsignedInteger('aporta')->nullable();
            $table->unsignedInteger('paga')->nullable();
            $table->unsignedInteger('facturacion')->nullable();
            $table->timestamps();


            $table->foreign('estado_id')->references('id')->on('estado_escuelas')->onDelete('restrict');
            $table->foreign('aporta')->references('id')->on('aportes_convenios')->onDelete('set null');
            $table->foreign('paga')->references('id')->on('pagadores_conectividad')->onDelete('set null');
            $table->foreign('facturacion')->references('id')->on('informacion_facturacion')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuelas');
    }
}
