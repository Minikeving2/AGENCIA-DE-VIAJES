
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Crear usuario</h1>
<form method="POST" action="{{ route('admin.usuarios.store') }}">
  @csrf
  <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" name="name" required></div>
  <div class="mb-3"><label class="form-label">Email</label><input class="form-control" name="email" type="email" required></div>
  <div class="mb-3"><label class="form-label">Contraseña</label><input class="form-control" name="password" type="password" required></div>
  <div class="mb-3"><label class="form-label">Rol</label><select class="form-select" name="role"><option value="agente">Agente</option><option value="admin">Admin</option></select></div>
  <button class="btn btn-primary">Crear</button>
</form>
@endsection
