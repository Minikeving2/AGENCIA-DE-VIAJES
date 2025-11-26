
<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteAdminController extends Controller
{
    public function index(){
        $paquetes = Paquete::orderBy('id','desc')->paginate(20);
        return view('admin.paquetes.index', compact('paquetes'));
    }

    public function create(){
        return view('admin.paquetes.create');
    }

    public function store(Request $req){
        $req->validate([
            'titulo'=>'required','destino'=>'required','precio'=>'required|numeric'
        ]);
        Paquete::create($req->only(['titulo','destino','duracion','precio','descripcion','imagenes','activo']));
        return redirect()->route('admin.paquetes.index')->with('success','Paquete creado');
    }

    public function edit($id){
        $paquete = Paquete::findOrFail($id);
        return view('admin.paquetes.edit', compact('paquete'));
    }

    public function update(Request $req, $id){
        $paquete = Paquete::findOrFail($id);
        $paquete->update($req->only(['titulo','destino','duracion','precio','descripcion','imagenes','activo']));
        return redirect()->route('admin.paquetes.index')->with('success','Paquete actualizado');
    }

    public function destroy($id){
        Paquete::destroy($id);
        return back()->with('success','Paquete eliminado');
    }
}
