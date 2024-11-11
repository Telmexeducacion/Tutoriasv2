<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsumoInternet extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'consumo_internets';

     // Campos asignables en masa
     protected $fillable = [
         'linea_id', // ID de la línea de internet
         'mes', // Mes del consumo
         'anio', // Año del consumo
         'consumo_mb', // Consumo en megabytes
         'costo', // Costo asociado al consumo
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
