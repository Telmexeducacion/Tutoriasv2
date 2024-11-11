<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEscuelas extends Model
{
    // Nombre de la tabla
    protected $table = 'estado_escuelas';

    // Campos asignables en masa
    protected $fillable = [
        'nombre', // Nombre del estado de la escuela (por ejemplo, Activa, Inactiva)
        'descripcion', // Descripción opcional del estado
    ];

    /**
     * Relación con el modelo Escuela.
     * Un estado puede estar asociado a muchas escuelas.
     */
    public function escuelas()
    {
        return $this->hasMany(Escuela::class, 'estado_id');
    }
}
