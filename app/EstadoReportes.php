<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoReportes extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'estado_reportes';

    // Campos asignables en masa
    protected $fillable = [
        'nombre', // Nombre del estado (por ejemplo, Pendiente, En progreso, Completado)
        'descripcion', // Descripción del estado
    ];

    /**
     * Relación con el modelo Reporte.
     * Un estado puede estar asociado a muchos reportes.
     */
    public function reportes()
    {
        return $this->hasMany(Reporte::class, 'estado_reporte_id');
    }

}
