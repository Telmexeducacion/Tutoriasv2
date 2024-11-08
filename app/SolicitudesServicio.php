<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudesServicio extends Model
{
    protected $table = 'solicitudes_servicio';

    protected $fillable = [
        'equipo_id',
        'sede_id',
        'gadget_id',
        'descripcion',
        'estado',
        'codigo_aprobacion',
        'fecha_apertura',
        'fecha_cierre'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }

    public function gadget()
    {
        return $this->belongsTo(Gadget::class);
    }

    public function historialProgreso()
    {
        return $this->hasMany(HistorialProgresoSolicitud::class);
    }

}
