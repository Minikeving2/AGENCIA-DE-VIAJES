<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre','email','telefono','consentimientoDatos'];
    protected $casts = ['consentimientoDatos' => 'boolean'];

    public function solicitudes() {
        return $this->hasMany(Solicitud::class);
    }
}
