<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagadoresConectividad extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'pagadores_conectividads';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del pagador (por ejemplo, Gobierno Estatal, Empresa de Internet)
         'descripcion', // Descripción del pagador o entidad
     ];

     /**
      * Relación con el modelo Escuela.
      * Un pagador puede estar asociado a muchas escuelas.
      */
     public function escuelas()
     {
         return $this->hasMany(Escuela::class, 'pagador_conectividad_id');
     }

}
