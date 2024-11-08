<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sedes';

    protected $fillable = [
        'ciudad',
        'codigo_postal',
        'edificio',
        'piso',
        'horario',
        'director_id'
    ];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
