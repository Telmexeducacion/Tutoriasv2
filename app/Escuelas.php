<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'escuelas';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre de la escuela
         'clave', // Clave de identificación de la escuela
         'direccion', // Dirección de la escuela
         'telefono', // Teléfono de contacto
         'estado_id', // ID del estado de la escuela
         'tecnologia_conectividad_id', // ID de la tecnología de conectividad
         'informacion_facturacion_id', // ID de la información de facturación
         'aporte_convenio_id', // ID del aporte del convenio
         'pagador_conectividad_id', // ID del pagador de conectividad
     ];

     /**
      * Relación con el modelo EstadoEscuela.
      */
     public function estado()
     {
         return $this->belongsTo(EstadoEscuela::class, 'estado_id');
     }

     /**
      * Relación con el modelo TecnologiaConectividad.
      */
     public function tecnologiaConectividad()
     {
         return $this->belongsTo(TecnologiaConectividad::class, 'tecnologia_conectividad_id');
     }

     /**
      * Relación con el modelo InformacionFacturacion.
      */
     public function informacionFacturacion()
     {
         return $this->belongsTo(InformacionFacturacion::class, 'informacion_facturacion_id');
     }

     /**
      * Relación con el modelo AportesConvenio.
      */
     public function aporteConvenio()
     {
         return $this->belongsTo(AportesConvenio::class, 'aporte_convenio_id');
     }

     /**
      * Relación con el modelo PagadorConectividad.
      */
     public function pagadorConectividad()
     {
         return $this->belongsTo(PagadorConectividad::class, 'pagador_conectividad_id');
     }

     /**
      * Relación con el modelo Turno.
      */
     public function turnos()
     {
         return $this->hasMany(Turno::class, 'escuela_id');
     }

     /**
      * Relación con el modelo Tutor.
      */
     public function tutores()
     {
         return $this->belongsToMany(Tutor::class, 'tutor_escuelas', 'escuela_id', 'tutor_id');
     }

}
