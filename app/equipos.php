<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    //
     // Nombre de la tabla
     protected $table = 'equipos';

     // Campos asignables en masa
     protected $fillable = [
         'nombre', // Nombre del equipo
         'numero_serie', // Número de serie del equipo
         'numero_inventario', // Número de inventario del equipo
         'marca_id', // ID de la marca
         'modelo_id', // ID del modelo
         'sistema_operativo_id', // ID del sistema operativo
         'tipo_equipo_id', // ID del tipo de equipo
         'estado_equipo_id', // ID del estado del equipo
         'observaciones', // Observaciones adicionales
     ];

     /**
      * Relación con el modelo Marca.
      */
     public function marca()
     {
         return $this->belongsTo(Marca::class, 'marca_id');
     }

     /**
      * Relación con el modelo Modelo.
      */
     public function modelo()
     {
         return $this->belongsTo(Modelo::class, 'modelo_id');
     }

     /**
      * Relación con el modelo SistemaOperativo.
      */
     public function sistemaOperativo()
     {
         return $this->belongsTo(SistemaOperativo::class, 'sistema_operativo_id');
     }

     /**
      * Relación con el modelo TipoEquipo.
      */
     public function tipoEquipo()
     {
         return $this->belongsTo(TipoEquipo::class, 'tipo_equipo_id');
     }

     /**
      * Relación con el modelo EstadoEquipo.
      */
     public function estadoEquipo()
     {
         return $this->belongsTo(EstadoEquipo::class, 'estado_equipo_id');
     }

     /**
      * Relación con el modelo HistorialEquipo.
      */
     public function historial()
     {
         return $this->hasMany(HistorialEquipo::class, 'equipo_id');
     }

}
