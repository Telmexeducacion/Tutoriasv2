<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $table = 'auditoria';

    protected $fillable = [
        'entidad',
        'entidad_id',
        'tipo_cambio',
        'descripcion',
        'usuario_id',
        'fecha'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}
