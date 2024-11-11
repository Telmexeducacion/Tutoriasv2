<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('escuela_id');
            $table->string('numero_linea', 20)->unique();
            $table->decimal('ancho_banda', 10, 2); // Ancho de banda contratado en Mbps
            $table->unsignedInteger('tecnologia_id');
            $table->string('nombre_paquete', 255);
            $table->decimal('costo_paquete', 10, 2);
            $table->date('vigencia_servicio');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
            $table->foreign('tecnologia_id')->references('id')->on('tecnologias_conectividad')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas');
    }
}
