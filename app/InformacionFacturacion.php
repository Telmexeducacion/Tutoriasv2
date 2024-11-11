<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionFacturacion extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'informacion_facturacions';

     // Campos asignables en masa
     protected $fillable = [
         'razon_social', // Razón social de la entidad
         'rfc', // RFC de la entidad
         'direccion', // Dirección de facturación
         'telefono', // Teléfono de contacto
         'correo', // Correo electrónico de contacto
     ];

     /**
      * Relación con el modelo Escuela.
      * Una entidad de facturación puede estar vinculada a muchas escuelas.
      */
     public function escuelas()
     {
         return $this->hasMany(Escuela::class, 'informacion_facturacion_id');
     }

}
