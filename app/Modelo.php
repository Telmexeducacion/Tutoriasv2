<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelos';

    protected $fillable = [
        'nombre'
    ];

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }

    public function gadgets()
    {
        return $this->hasMany(Gadget::class);
    }

}
