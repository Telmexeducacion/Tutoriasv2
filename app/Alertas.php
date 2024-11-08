<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alertas extends Model
{
    protected $table = 'alertas';

    protected $fillable = [
        'tipo_alerta',
        'descripcion',
        'fecha_activacion',
        'fecha_limite',
        'estado',
        'destinatario_id'
    ];

    public function destinatario()
    {
        return $this->belongsTo(User::class, 'destinatario_id');
    }

}
