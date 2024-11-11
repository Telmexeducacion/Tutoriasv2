<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'lineas';

    // Campos asignables en masa
    protected $fillable = [
        'numero', // Número de la línea telefónica
        'descripcion', // Descripción de la línea
        'estado_linea_id', // ID del estado de la línea
        'sede_id', // ID de la sede asociada
        'observaciones', // Observaciones adicionales
    ];

    /**
     * Relación con el modelo EstadoLinea.
     */
    public function estadoLinea()
    {
        return $this->belongsTo(EstadoLinea::class, 'estado_linea_id');
    }

    /**
     * Relación con el modelo Sede.
     */
    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id');
    }

    /**
     * Relación con el modelo HistoricoLinea.
     */
    public function historico()
    {
        return $this->hasMany(HistoricoLinea::class, 'linea_id');
    }

}
