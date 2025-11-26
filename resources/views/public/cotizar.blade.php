
@extends('layouts.main')
@section('title','Cotizar paquete')

@section('content')
<div class="py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="mb-3">Solicitar cotización</h3>
          <form method="POST" action="{{ route('cotizar.store') }}">
            @csrf
            <input type="hidden" name="paquete_id" value="{{ $paquete->id }}">
            <div class="mb-3"><label class="form-label">Nombre completo</label><input class="form-control" name="nombre" required></div>
            <div class="mb-3"><label class="form-label">Correo</label><input class="form-control" name="email" type="email" required></div>
            <div class="mb-3"><label class="form-label">Teléfono</label><input class="form-control" name="telefono"></div>
            <div class="mb-3"><label class="form-label">Fecha inicio</label><input class="form-control" name="fecha_inicio" type="date"></div>
            <div class="mb-3"><label class="form-label">Viajeros</label><input class="form-control" name="viajeros" type="number" value="1"></div>
            <div class="mb-3"><label class="form-label">Notas</label><textarea class="form-control" name="notas"></textarea></div>
            <button class="btn btn-primary">Enviar solicitud</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
