<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoLineas extends Model
{
    //
        // Nombre de la tabla
        protected $table = 'historico_lineas';

        // Campos asignables en masa
        protected $fillable = [
            'linea_id', // ID de la línea telefónica
            'usuario_id', // ID del usuario que realizó el cambio
            'estado_anterior', // Estado anterior de la línea
            'estado_nuevo', // Nuevo estado de la línea
            'fecha_cambio', // Fecha del cambio
            'observaciones', // Observaciones adicionales
        ];

        /**
         * Relación con el modelo Linea.
         */
        public function linea()
        {
            return $this->belongsTo(Linea::class, 'linea_id');
        }

        /**
         * Relación con el modelo Usuario.
         */
        public function usuario()
        {
            return $this->belongsTo(User::class, 'usuario_id');
        }
}
