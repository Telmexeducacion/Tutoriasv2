<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SistemasOperativos extends Model
{
    protected $table = 'sistemas_operativos';

    protected $fillable = [
        'nombre',
        'version'
    ];

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
