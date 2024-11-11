<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimientosMobiliario extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'movimientos_mobiliarios';

     // Campos asignables en masa
     protected $fillable = [
         'mobiliario_id', // ID del mobiliario
         'usuario_id', // ID del usuario que realiza el movimiento
         'aprobado_por', // ID del usuario que aprueba el movimiento (puede ser NULL)
         'fecha_movimiento', // Fecha del movimiento
         'estado_movimiento_id', // ID del estado del movimiento
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Mobiliario.
      */
     public function mobiliario()
     {
         return $this->belongsTo(Mobiliario::class, 'mobiliario_id');
     }

     /**
      * Relación con el modelo Usuario que realiza el movimiento.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

     /**
      * Relación con el modelo Usuario que aprueba el movimiento.
      */
     public function aprobadoPor()
     {
         return $this->belongsTo(User::class, 'aprobado_por')->withDefault();
     }

     /**
      * Relación con el modelo EstadoMovimiento.
      */
     public function estadoMovimiento()
     {
         return $this->belongsTo(EstadoMovimiento::class, 'estado_movimiento_id');
     }

     /**
      * Relación con el modelo MovimientoMobiliarioDetalle.
      */
     public function detalles()
     {
         return $this->hasMany(MovimientoMobiliarioDetalle::class, 'movimiento_mobiliario_id');
     }

}
