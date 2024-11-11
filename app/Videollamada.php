<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videollamada extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'videollamadas';

     // Campos asignables en masa
     protected $fillable = [
         'tutoria_id', // ID de la tutoría asociada
         'usuario_id', // ID del usuario que participa en la videollamada
         'fecha_inicio', // Fecha y hora de inicio de la videollamada
         'fecha_fin', // Fecha y hora de fin de la videollamada
         'estado', // Estado de la videollamada (programada, en curso, finalizada)
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Tutoria.
      */
     public function tutoria()
     {
         return $this->belongsTo(Tutoria::class, 'tutoria_id');
     }

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

}
