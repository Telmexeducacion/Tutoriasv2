<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoMovimientos extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'estado_movimientos';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del estado (por ejemplo, Iniciado, En tránsito, Completado)
         'descripcion', // Descripción del estado
     ];

     /**
      * Relación con el modelo Movimiento.
      * Un estado puede estar asociado a muchos movimientos.
      */
     public function movimientos()
     {
         return $this->hasMany(Movimiento::class, 'estado_movimiento_id');
     }

}
