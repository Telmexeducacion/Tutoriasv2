<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'reportes';

     // Campos asignables en masa
     protected $fillable = [
         'usuario_id', // ID del usuario que crea el reporte
         'tutoria_id', // ID de la tutoría asociada
         'descripcion', // Descripción del problema o incidente
         'estado_reporte', // Estado del reporte (abierto, en progreso, cerrado)
         'fecha_creacion', // Fecha de creación del reporte
         'fecha_cierre', // Fecha de cierre del reporte (puede ser NULL)
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

     /**
      * Relación con el modelo Tutoria.
      */
     public function tutoria()
     {
         return $this->belongsTo(Tutoria::class, 'tutoria_id');
     }

}
