<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidacionDiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validacion_dians', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('linea_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->date('fecha_validacion');
            $table->decimal('ancho_banda_validado', 10, 2); // Ancho de banda validado en Mbps
            $table->text('observaciones')->nullable();
            $table->timestamps();
             // Claves foráneas
             $table->foreign('linea_id')->references('id')->on('lineas')->onDelete('cascade');
             $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validacion_dians');
    }
}
