<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class CatalogoController extends Controller
{
    public function index(Request $req){
        $query = Paquete::where('activo',1);
        if($req->filled('destino')) $query->where('destino','like','%'.$req->destino.'%');
        if($req->filled('minprecio')) $query->where('precio','>=',$req->minprecio);
        if($req->filled('maxprecio')) $query->where('precio','<=',$req->maxprecio);
        $paquetes = $query->paginate(10);
        return view('catalogo.index', compact('paquetes'));
    }

    public function show($id){
        $paquete = Paquete::findOrFail($id);
        return view('catalogo.show', compact('paquete'));
    }

    public function comparar(Request $req){
        $ids = $req->input('ids',[]);
        $paquetes = Paquete::whereIn('id',$ids)->get();
        return view('catalogo.comparar', compact('paquetes'));
    }
}
