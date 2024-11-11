<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialMobiliario extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'historial_mobiliarios';

     // Campos asignables en masa
     protected $fillable = [
         'mobiliario_id', // ID del mobiliario
         'usuario_id', // ID del usuario que realizó el cambio
         'estado_anterior', // Estado anterior del mobiliario
         'estado_nuevo', // Nuevo estado del mobiliario
         'fecha_cambio', // Fecha del cambio
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Mobiliario.
      */
     public function mobiliario()
     {
         return $this->belongsTo(Mobiliario::class, 'mobiliario_id');
     }

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }
     
}
