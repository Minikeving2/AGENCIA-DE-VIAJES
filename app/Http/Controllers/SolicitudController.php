<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Cliente;
use App\Models\Oportunidad;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function store(Request $req){
        $req->validate([
            'paquete_id'=>'required|integer',
            'nombre'=>'required|string',
            'email'=>'required|email'
        ]);

        $cliente = Cliente::firstOrCreate(['email'=>$req->email], [
            'nombre'=>$req->nombre,
            'telefono'=>$req->telefono ?? null,
            'consentimientoDatos'=>true,
        ]);

        $sol = Solicitud::create([
            'cliente_id'=>$cliente->id,
            'paquete_id'=>$req->paquete_id,
            'preferencias'=>$req->preferencias ?? null,
            'viajeros'=>$req->viajeros ?? 1,
            'fecha_inicio'=>$req->fecha_inicio ?? null,
            'fecha_fin'=>$req->fecha_fin ?? null,
            'notas'=>$req->notas ?? null,
        ]);

        Oportunidad::create(['solicitud_id'=>$sol->id,'estado'=>'Pendiente']);

        return redirect()->route('home')->with('success','Solicitud enviada correctamente.');
    }
}
