
<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    public function index(){
        $users = User::orderBy('id','desc')->paginate(20);
        return view('admin.usuarios.index', compact('users'));
    }

    public function create(){
        return view('admin.usuarios.create');
    }

    public function store(Request $req){
        $req->validate([ 'name'=>'required','email'=>'required|email|unique:users,email','password'=>'required|min:8' ]);
        User::create([ 'name'=>$req->name, 'email'=>$req->email, 'password'=>Hash::make($req->password), 'role'=>$req->role ?? 'agente' ]);
        return redirect()->route('admin.usuarios.index')->with('success','Usuario creado');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.usuarios.edit', compact('user'));
    }

    public function update(Request $req, $id){
        $user = User::findOrFail($id);
        $data = $req->only(['name','email','role']);
        if($req->filled('password')) $data['password'] = Hash::make($req->password);
        $user->update($data);
        return redirect()->route('admin.usuarios.index')->with('success','Usuario actualizado');
    }
}
