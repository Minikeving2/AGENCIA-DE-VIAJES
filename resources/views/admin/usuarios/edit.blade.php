
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Editar usuario</h1>
<form method="POST" action="{{ route('admin.usuarios.update',$user->id) }}">
  @csrf @method('PUT')
  <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" name="name" value="{{ $user->name }}"></div>
  <div class="mb-3"><label class="form-label">Email</label><input class="form-control" name="email" value="{{ $user->email }}"></div>
  <div class="mb-3"><label class="form-label">Rol</label><select class="form-select" name="role"><option value="agente" @selected($user->role=='agente')>Agente</option><option value="admin" @selected($user->role=='admin')>Admin</option></select></div>
  <div class="mb-3"><label class="form-label">Nueva contraseña (opcional)</label><input class="form-control" name="password" type="password"></div>
  <button class="btn btn-primary">Guardar</button>
</form>
@endsection
