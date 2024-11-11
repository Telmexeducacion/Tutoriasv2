<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoMobiliario extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'estado_mobiliarios';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del estado (por ejemplo, Nuevo, Usado, Dañado)
         'descripcion', // Descripción del estado
     ];

     /**
      * Relación con el modelo Mobiliario.
      * Un estado puede estar asociado a muchos mobiliarios.
      */
     public function mobiliarios()
     {
         return $this->hasMany(Mobiliario::class, 'estado_mobiliario_id');
     }

}
