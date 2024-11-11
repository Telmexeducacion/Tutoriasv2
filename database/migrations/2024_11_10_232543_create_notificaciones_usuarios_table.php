<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionesUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('notificacion_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->boolean('leida')->default(false); // Indica si el usuario ha leído la notificación
            $table->timestamp('leida_en')->nullable(); // Fecha y hora en que se leyó la notificación
            $table->timestamps();
                  // Claves foráneas
            $table->foreign('notificacion_id')->references('id')->on('notificaciones')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');

            // Índice único para evitar duplicados
            $table->unique(['notificacion_id', 'usuario_id'], 'unique_notificacion_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones_usuarios');
    }
}
