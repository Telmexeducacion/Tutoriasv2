<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AportesConvenio extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'aportes_convenios';

    // Campos asignables en masa
    protected $fillable = [
        'nombre', // Nombre del aporte (por ejemplo, Gobierno Federal, Empresa Privada)
        'descripcion', // Descripción del convenio o aporte
        'monto', // Monto aportado en el convenio
        'fecha_aporte', // Fecha en que se realizó el aporte
    ];

    /**
     * Relación con el modelo Escuela.
     * Un aporte puede estar vinculado a muchas escuelas.
     */
    public function escuelas()
    {
        return $this->hasMany(Escuela::class, 'aporte_convenio_id');
    }

}
