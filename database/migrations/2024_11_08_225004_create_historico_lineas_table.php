<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_lineas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('linea_id')->unsigned();
            $table->string('numero_linea', 20);
            $table->date('fecha_fin')->nullable(); // Fecha en que dejó de usarse (NULL si es el número actual)
            $table->unsignedInteger('usuario_movimiento')->nullable();;
            $table->string('comentario_final', 255)->nullable();
            $table->timestamps();
            // Claves foráneas
            $table->foreign('linea_id')->references('id')->on('lineas')->onDelete('cascade');
            $table->foreign('usuario_movimiento')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_lineas');
    }
}
