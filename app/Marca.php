<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

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
