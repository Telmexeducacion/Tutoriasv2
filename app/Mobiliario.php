<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'mobiliarios';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del mobiliario
         'numero_inventario', // Número de inventario
         'tipo_mobiliario_id', // ID del tipo de mobiliario
         'estado_mobiliario_id', // ID del estado del mobiliario
         'sede_id', // ID de la sede donde se encuentra el mobiliario
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo TipoMobiliario.
      */
     public function tipoMobiliario()
     {
         return $this->belongsTo(TipoMobiliario::class, 'tipo_mobiliario_id');
     }

     /**
      * Relación con el modelo EstadoMobiliario.
      */
     public function estadoMobiliario()
     {
         return $this->belongsTo(EstadoMobiliario::class, 'estado_mobiliario_id');
     }

     /**
      * Relación con el modelo Sede.
      */
     public function sede()
     {
         return $this->belongsTo(Sede::class, 'sede_id');
     }

     /**
      * Relación con el modelo HistorialMobiliario.
      */
     public function historial()
     {
         return $this->hasMany(HistorialMobiliario::class, 'mobiliario_id');
     }

}
