<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    protected $table = 'Oportunidades';
    protected $fillable = ['solicitud_id','estado','notas'];
    public function solicitud(){ return $this->belongsTo(Solicitud::class); }
}
