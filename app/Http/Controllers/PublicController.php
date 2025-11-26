<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $paquetes = Paquete::where('activo', true)
            ->take(4)
            ->get();

        return view('public.home', compact('paquetes'));
    }

    public function cotizarForm($id)
{
    $paquete = \App\Models\Paquete::findOrFail($id);
    return view('public.cotizar', compact('paquete'));
}

    public function paquetes(Request $req)
    {
        $query = Paquete::where('activo', true);

        // 🔍 Búsqueda por texto
        if ($req->filled('q')) {
            $q = $req->q;

            $query->where(function($sub) use ($q) {
                $sub->where('titulo', 'like', "%$q%")
                    ->orWhere('destino', 'like', "%$q%")
                    ->orWhere('descripcion', 'like', "%$q%");
            });
        }

        // 🔢 Paginación
        $paquetes = $query->paginate(12);

        return view('public.paquetes', compact('paquetes'));
    }

    public function paquete($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('public.paquete', compact('paquete'));
    }
}
