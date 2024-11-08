<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo_alerta', ['cambio de sede', 'garantía pendiente']);
            $table->text('descripcion');
            $table->date('fecha_activacion');
            $table->date('fecha_limite')->nullable();
            $table->enum('estado', ['pendiente', 'resuelta']);
            $table->unsignedInteger('destinatario_id');
            $table->timestamps();

            $table->foreign('destinatario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alertas');
    }
}
