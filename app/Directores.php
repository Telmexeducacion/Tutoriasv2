<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directores';

    protected $fillable = [
        'nombre',
        'telefono',
        'correo'
    ];

    public function sede()
    {
        return $this->hasOne(Sede::class);
    }
}
