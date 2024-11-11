<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlertasTutoria extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'alertas_tutorias';

     // Campos asignables en masa
     protected $fillable = [
         'tutoria_id', // ID de la tutoría asociada
         'usuario_id', // ID del usuario que genera la alerta
         'tipo_alerta', // Tipo de alerta (por ejemplo, falta de conexión, retraso, etc.)
         'descripcion', // Descripción de la alerta
         'estado_alerta', // Estado de la alerta (pendiente, resuelta)
         'fecha_creacion', // Fecha de creación de la alerta
         'fecha_resolucion', // Fecha de resolución de la alerta (puede ser NULL)
     ];

     /**
      * Relación con el modelo Tutoria.
      */
     public function tutoria()
     {
         return $this->belongsTo(Tutoria::class, 'tutoria_id');
     }

     /**
      * Relación con el modelo Usuario.
      */
     public function usuario()
     {
         return $this->belongsTo(User::class, 'usuario_id');
     }

}
