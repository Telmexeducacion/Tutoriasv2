<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusTutoria extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'estatus_tutorias';

     // Campos asignables en masa
     protected $fillable = [
         'tutoria_id', // ID de la tutoría
         'estado', // Estado actual de la tutoría (activa, cancelada, finalizada)
         'fecha_actualizacion', // Fecha de la última actualización del estado
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Tutoria.
      */
     public function tutoria()
     {
         return $this->belongsTo(Tutoria::class, 'tutoria_id');
     }

}
