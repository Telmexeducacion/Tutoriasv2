<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMobiliario extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'tipo_mobiliarios';

    // Campos asignables en masa
    protected $fillable = [
        'nombre', // Nombre del tipo de mobiliario (por ejemplo, Silla, Escritorio)
        'descripcion', // Descripción del tipo de mobiliario
    ];

    /**
     * Relación con el modelo Mobiliario.
     * Un tipo de mobiliario puede estar asociado a muchos mobiliarios.
     */
    public function mobiliarios()
    {
        return $this->hasMany(Mobiliario::class, 'tipo_mobiliario_id');
    }

}
