<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable = ['paquete_id','vigencia_desde','vigencia_hasta','descuento','titulo'];
}
