<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionFacturacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_facturacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_facturacion', 255);
            $table->string('nombre_paquete', 255);
            $table->decimal('costo_paquete', 10, 2);
            $table->date('vigencia_servicio');
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
        Schema::dropIfExists('informacion_facturacions');
    }
}
