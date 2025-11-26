<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CotizacionPdf extends Model
{
    
    protected $fillable = ['solicitud_id','url_archivo','fecha_emision','vigencia','moneda'];
}
