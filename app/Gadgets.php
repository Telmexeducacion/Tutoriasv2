<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gadgets extends Model
{
    protected $table = 'gadgets';

    protected $fillable = [
        'nombre',
        'resa',
        'numero_serie',
        'marca_id',
        'modelo_id'
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'equipos_gadgets');
    }

}
