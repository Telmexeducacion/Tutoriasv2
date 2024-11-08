<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $table = 'observaciones';

    protected $fillable = [
        'equipo_id',
        'usuario_id',
        'departamento',
        'fecha_observacion',
        'detalle'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}
