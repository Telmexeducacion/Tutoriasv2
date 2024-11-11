<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnologiaConectividad extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'tecnologia_conectividads';

    // Campos asignables en masa
    protected $fillable = [
        'nombre', // Nombre de la tecnología (por ejemplo, Fibra óptica, Satelital)
        'descripcion', // Descripción de la tecnología
    ];

    /**
     * Relación con el modelo Escuela.
     * Una tecnología de conectividad puede ser utilizada por muchas escuelas.
     */
    public function escuelas()
    {
        return $this->hasMany(Escuela::class, 'tecnologia_conectividad_id');
    }

}
