<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionesUsuarios extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'notificaciones_usuarios';

     // Campos asignables en masa
     protected $fillable = [
         'notificacion_id', // ID de la notificación
         'usuario_id', // ID del usuario que recibe la notificación
         'leida', // Indicador de si la notificación ha sido leída (true/false)
         'fecha_lectura', // Fecha y hora de lectura (puede ser NULL)
     ];

     /**
      * Relación con el modelo Notificacion.
      */
     public function notificacion()
     {
         return $this->belongsTo(Notificacion::class, 'notificacion_id');
     }

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

}
