
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Crear paquete</h1>
<form method="POST" action="{{ route('admin.paquetes.store') }}">
  @csrf
  <div class="mb-3"><label class="form-label">Título</label><input class="form-control" name="titulo" required></div>
  <div class="mb-3"><label class="form-label">Destino</label><input class="form-control" name="destino"></div>
  <div class="mb-3"><label class="form-label">Duración (días)</label><input class="form-control" name="duracion" type="number"></div>
  <div class="mb-3"><label class="form-label">Precio</label><input class="form-control" name="precio" type="number" step="0.01"></div>
  <div class="mb-3"><label class="form-label">Descripción</label><textarea class="form-control" name="descripcion"></textarea></div>
  <div class="mb-3"><label class="form-label">Imágenes (JSON array o URLs separadas por coma)</label><input class="form-control" name="imagenes"></div>
  <div class="mb-3"><label class="form-label">Activo</label><select class="form-select" name="activo"><option value="1">Sí</option><option value="0">No</option></select></div>
  <button class="btn btn-primary">Guardar</button>
</form>
@endsection
