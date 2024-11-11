<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos_sede extends Model
{
     // Nombre de la tabla
     protected $table = 'equipos_sede';

     // Campos asignables en masa
     protected $fillable = [
         'sede_id',          // ID de la sede
         'equipo_id',        // ID del equipo
         'usuario_asignado', // ID del usuario asignado al equipo
         'fecha_asignacion', // Fecha de asignación del equipo
         'observaciones',    // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Sede.
      */
     public function sede()
     {
         return $this->belongsTo(Sede::class, 'sede_id');
     }

     /**
      * Relación con el modelo Equipo.
      */
     public function equipo()
     {
         return $this->belongsTo(Equipo::class, 'equipo_id');
     }

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_asignado');
     }

}
