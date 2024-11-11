<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
      // Nombre de la tabla
      protected $table = 'roles';

      // Campos que pueden ser asignados en masa
      protected $fillable = [
          'nombre',
          'descripcion',
      ];

      /**
       * Relación con el modelo User.
       * Un rol puede tener muchos usuarios.
       */
      public function usuarios()
      {
          return $this->belongsToMany(User::class, 'usuario_roles', 'rol_id', 'usuario_id');
      }

}
