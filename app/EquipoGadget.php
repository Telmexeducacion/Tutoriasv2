<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipoGadget extends Model
{
    protected $table = 'equipos_gadgets';

    protected $fillable = [
        'equipo_id',
        'gadget_id'
    ];
}
