<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditoria', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('entidad', ['equipos', 'solicitudes_servicio', 'sedes', 'gadgets']);
            $table->unsignedInteger('entidad_id');
            $table->enum('tipo_cambio', ['creación', 'actualización', 'eliminación']);
            $table->text('descripcion');
            $table->unsignedInteger('usuario_id');
            $table->timestamp('fecha')->useCurrent();
            $table->timestamps();

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
        Schema::dropIfExists('auditorias');
    }
}
