<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidacionDian extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'validacion_dians';

     // Campos asignables en masa
     protected $fillable = [
         'sede_id', // ID de la sede
         'usuario_id', // ID del usuario que realiza la validación
         'fecha_validacion', // Fecha de la validación
         'estado_validacion', // Estado de la validación (aprobada, rechazada, pendiente)
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Sede.
      */
     public function sede()
     {
         return $this->belongsTo(Sede::class, 'sede_id');
     }

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

}
