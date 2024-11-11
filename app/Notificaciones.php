<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'notificaciones';

    // Campos asignables en masa
    protected $fillable = [
        'titulo', // Título de la notificación
        'mensaje', // Mensaje de la notificación
        'tipo', // Tipo de notificación (informativa, alerta, advertencia)
        'fecha_envio', // Fecha y hora de envío
        'estado', // Estado de la notificación (enviada, leída)
    ];

    /**
     * Relación con el modelo NotificacionUsuario.
     */
    public function usuarios()
    {
        return $this->hasMany(NotificacionUsuario::class, 'notificacion_id');
    }

}
