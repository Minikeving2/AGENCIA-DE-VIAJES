
@extends('layouts.main')
@section('title','Editar perfil')
@section('content')
<div class="card">
  <div class="card-body">
    <h3>Editar perfil</h3>
    <form method="POST" action="{{ route('profile.update') }}">@csrf @method('PATCH')
      <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" name="name" value="{{ $user->name }}"></div>
      <div class="mb-3"><label class="form-label">Email</label><input class="form-control" name="email" value="{{ $user->email }}"></div>
      <div class="mb-3"><label class="form-label">Nueva contraseña</label><input class="form-control" name="password" type="password"></div>
      <div class="mb-3"><label class="form-label">Confirmar contraseña</label><input class="form-control" name="password_confirmation" type="password"></div>
      <button class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
@endsection
