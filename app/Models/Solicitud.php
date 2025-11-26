<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes'; // si fuera distinto, especifícalo

    protected $fillable = [
        'cliente_id',
        'paquete_id',
        'preferencias',
        'viajeros',
        'fecha_inicio',
        'fecha_fin',
        'notas',
        'estado', // Pendiente, EnProceso, Cerrada
        'asignado_a', // agente id opcional
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }

    // estado helpers
    const EST_PENDIENTE = 'Pendiente';
    const EST_ENPROCESO = 'En Proceso';
    const EST_CERRADA = 'Cerrada';
}
