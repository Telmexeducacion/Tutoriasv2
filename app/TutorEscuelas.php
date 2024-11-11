<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorEscuelas extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'tutor_escuelas';

    // Campos asignables en masa
    protected $fillable = [
        'tutor_id', // ID del tutor
        'escuela_id', // ID de la escuela
    ];

    /**
     * Relación con el modelo Tutor.
     */
    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }

    /**
     * Relación con el modelo Escuela.
     */
    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'escuela_id');
    }

}
 
}
