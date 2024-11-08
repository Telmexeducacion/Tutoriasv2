<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialProgresoSolicitud extends Model
{
    protected $table = 'historial_progreso_solicitud';

    protected $fillable = [
        'solicitud_id',
        'fecha',
        'comentario',
        'tema_garantia'
    ];

    public function solicitud()
    {
        return $this->belongsTo(SolicitudServicio::class);
    }
}
