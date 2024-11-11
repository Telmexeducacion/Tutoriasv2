<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimientosEquipoDetalles extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'movimientos_equipo_detalles';

    // Campos asignables en masa
    protected $fillable = [
        'movimiento_equipo_id', // ID del movimiento del equipo
        'descripcion', // Descripción del detalle del movimiento
        'cantidad', // Cantidad de equipos en el movimiento
    ];

    /**
     * Relación con el modelo MovimientoEquipo.
     */
    public function movimientoEquipo()
    {
        return $this->belongsTo(MovimientoEquipo::class, 'movimiento_equipo_id');
    }

}
