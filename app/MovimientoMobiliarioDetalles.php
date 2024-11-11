<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimientoMobiliarioDetalles extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'movimiento_mobiliario_detalles';

     // Campos asignables en masa
     protected $fillable = [
         'movimiento_mobiliario_id', // ID del movimiento del mobiliario
         'descripcion', // Descripción del detalle del movimiento
         'cantidad', // Cantidad de mobiliarios en el movimiento
     ];

     /**
      * Relación con el modelo MovimientoMobiliario.
      */
     public function movimientoMobiliario()
     {
         return $this->belongsTo(MovimientoMobiliario::class, 'movimiento_mobiliario_id');
     }

}
