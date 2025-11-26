<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;

class PdfController extends Controller
{
    public function cotizacion($id){
        $sol = Solicitud::with('cliente','paquete')->findOrFail($id);
        return view('pdf.cotizacion', compact('sol'));
    }
}
