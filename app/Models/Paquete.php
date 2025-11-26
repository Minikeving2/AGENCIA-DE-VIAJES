<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    // Si tu tabla tiene otro nombre:
    protected $table = 'paquetes';

    protected $fillable = [
        'titulo',
        'destino',
        'duracion',
        'itinerario',
        'precio',
        'descripcion',
        'imagenes', // json / array
        'activo',
        'created_by' // optional: user id who creó (agente/admin)
    ];

    protected $casts = [
        'imagenes' => 'array',
        'activo' => 'boolean',
    ];

    // Relaciones
    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class);
    }
}
