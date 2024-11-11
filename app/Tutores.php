<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    //
      // Nombre de la tabla
      protected $table = 'tutores';

      // Campos asignables en masa
      protected $fillable = [
          'nombre', // Nombre completo del tutor
          'apellido', // Apellido del tutor
          'telefono', // Teléfono de contacto
          'correo', // Correo electrónico de contacto
          'direccion', // Dirección del tutor
      ];

      /**
       * Relación con el modelo Escuela.
       * Un tutor puede estar vinculado a muchas escuelas.
       */
      public function escuelas()
      {
          return $this->belongsToMany(Escuela::class, 'tutor_escuelas', 'tutor_id', 'escuela_id');
      }

}
