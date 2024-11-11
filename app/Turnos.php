<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'turnos';

    // Campos asignables en masa
    protected $fillable = [
        'nombre', // Nombre del turno (por ejemplo, Matutino, Vespertino)
        'escuela_id', // ID de la escuela
        'hora_inicio', // Hora de inicio del turno
        'hora_fin', // Hora de finalización del turno
    ];

    /**
     * Relación con el modelo Escuela.
     */
    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'escuela_id');
    }

    /**
     * Relación con el modelo ResponsableTurno.
     */
    public function responsables()
    {
        return $this->hasMany(ResponsableTurno::class, 'turno_id');
    }

}
