<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialEquipos extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'historial_equipos';

     // Campos asignables en masa
     protected $fillable = [
         'equipo_id', // ID del equipo
         'usuario_id', // ID del usuario que realizó la acción
         'estado_anterior', // Estado anterior del equipo
         'estado_nuevo', // Nuevo estado del equipo
         'fecha_cambio', // Fecha del cambio
         'observaciones', // Observaciones adicionales
     ];

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
         return $this->belongsTo(User::class, 'usuario_id');
     }

}
