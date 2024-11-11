<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondicionesEdificio extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'condiciones_edificios';

     // Campos asignables en masa
     protected $fillable = [
         'sede_id', // ID de la sede
         'condicion', // Condición del edificio (buena, regular, mala)
         'fecha_revision', // Fecha de revisión del edificio
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Sede.
      */
     public function sede()
     {
         return $this->belongsTo(Sede::class, 'sede_id');
     }

}
