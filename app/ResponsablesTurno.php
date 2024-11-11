<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsablesTurno extends Model
{
    //
      // Nombre de la tabla
      protected $table = 'responsables_turnos';

      // Campos asignables en masa
      protected $fillable = [
          'nombre', // Nombre del responsable
          'apellido', // Apellido del responsable
          'telefono', // Teléfono de contacto
          'correo', // Correo electrónico del responsable
          'turno_id', // ID del turno al que pertenece
      ];

      /**
       * Relación con el modelo Turno.
       */
      public function turno()
      {
          return $this->belongsTo(Turno::class, 'turno_id');
      }

}
