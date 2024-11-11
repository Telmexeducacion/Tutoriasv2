<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
     // Nombre de la tabla
     protected $table = 'tipo_equipos';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del tipo de equipo (por ejemplo, Laptop, Desktop)
         'descripcion', // Descripción del tipo de equipo
     ];

     /**
      * Relación con el modelo Equipo.
      * Un tipo de equipo puede estar asociado a muchos equipos.
      */
     public function equipos()
     {
         return $this->hasMany(Equipo::class, 'tipo_equipo_id');
     }
}
