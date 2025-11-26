
@extends('layouts.main')
@section('title','Registrarse')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h3 class="mb-3">Crear cuenta</h3>
        <form method="POST" action="{{ route('register') }}">@csrf
          <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" name="name" required></div>
          <div class="mb-3"><label class="form-label">Email</label><input class="form-control" name="email" type="email" required></div>
          <div class="mb-3"><label class="form-label">Password</label><input class="form-control" name="password" type="password" required></div>
          <div class="mb-3"><label class="form-label">Confirmar</label><input class="form-control" name="password_confirmation" type="password" required></div>
          <button class="btn btn-primary">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
