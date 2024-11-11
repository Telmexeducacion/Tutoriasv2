<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEquipos extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'estado_equipos';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del estado (por ejemplo, Activo, En reparación, Dado de baja)
         'descripcion', // Descripción del estado
     ];

     /**
      * Relación con el modelo Equipo.
      * Un estado puede estar asociado a muchos equipos.
      */
     public function equipos()
     {
         return $this->hasMany(Equipo::class, 'estado_equipo_id');
     }
     
}
