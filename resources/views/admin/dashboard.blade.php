
@extends('layouts.panel')
@section('panel-content')
<div class="container">
  <h1 class="mb-4">Panel Administrativo</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=80" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Paquetes</h5>
          <p class="card-text">Gestiona todos los paquetes.</p>
          <a href="{{ route('admin.paquetes.index') }}" class="btn btn-primary">Ir a paquetes</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=900&q=80" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Usuarios</h5>
          <p class="card-text">Gestiona usuarios y roles.</p>
          <a href="{{ route('admin.usuarios.index') }}" class="btn btn-primary">Ir a usuarios</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
