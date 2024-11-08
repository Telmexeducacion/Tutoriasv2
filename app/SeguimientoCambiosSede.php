<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeguimientoCambiosSede extends Model
{
    protected $table = 'seguimiento_cambios_sede';

    protected $fillable = [
        'equipo_id',
        'sede_anterior_id',
        'sede_nueva_id',
        'fecha_cambio',
        'usuario_id',
        'motivo'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function sedeAnterior()
    {
        return $this->belongsTo(Sede::class, 'sede_anterior_id');
    }

    public function sedeNueva()
    {
        return $this->belongsTo(Sede::class, 'sede_nueva_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}
