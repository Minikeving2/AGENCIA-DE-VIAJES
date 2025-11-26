<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class PaqueteController extends Controller
{

    
    public function index(){
        $paquetes = Paquete::paginate(20);
        return view('panel.paquetes.index', compact('paquetes'));
    }

    public function create(){ return view('panel.paquetes.create'); }
    public function store(Request $r){
        $data = $r->validate(['titulo'=>'required','precio'=>'required|numeric']);
        Paquete::create($data);
        return redirect()->route('panel.paquetes.index')->with('success','Creado');
    }

    
    public function edit($id){ $p = Paquete::findOrFail($id); return view('panel.paquetes.edit', compact('p')); }
    public function update(Request $r,$id){ $p = Paquete::findOrFail($id); $p->update($r->all()); return redirect()->route('panel.paquetes.index'); }
    public function destroy($id){ Paquete::destroy($id); return redirect()->route('panel.paquetes.index'); }
}
