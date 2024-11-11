<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRoles extends Model
{
     // Nombre de la tabla
     protected $table = 'usuario_roles';

     // Campos que pueden ser asignados en masa
     protected $fillable = [
         'usuario_id',
         'rol_id',
         'created_at',
         'updated_at',
     ];

     /**
      * Relación con el modelo User.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

     /**
      * Relación con el modelo Role.
      */
     public function rol()
     {
         return $this->belongsTo(Role::class, 'rol_id');
     }

}
