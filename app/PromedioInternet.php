<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromedioInternet extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'promedio_internets';

     // Campos asignables en masa
     protected $fillable = [
         'linea_id', // ID de la línea de internet
         'mes', // Mes del promedio
         'anio', // Año del promedio
         'promedio_consumo_mb', // Promedio de consumo en megabytes
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Linea.
      */
     public function linea()
     {
         return $this->belongsTo(Linea::class, 'linea_id');
     }

}
