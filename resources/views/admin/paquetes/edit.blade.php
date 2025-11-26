
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Editar paquete</h1>
<form method="POST" action="{{ route('admin.paquetes.update',$paquete->id) }}">
  @csrf @method('PUT')
  <div class="mb-3"><label class="form-label">Título</label><input class="form-control" name="titulo" value="{{ $paquete->titulo }}"></div>
  <div class="mb-3"><label class="form-label">Destino</label><input class="form-control" name="destino" value="{{ $paquete->destino }}"></div>
  <div class="mb-3"><label class="form-label">Duración (días)</label><input class="form-control" name="duracion" value="{{ $paquete->duracion }}"></div>
  <div class="mb-3"><label class="form-label">Precio</label><input class="form-control" name="precio" value="{{ $paquete->precio }}"></div>
  <div class="mb-3"><label class="form-label">Descripción</label><textarea class="form-control" name="descripcion">{{ $paquete->descripcion }}</textarea></div>
  <div class="mb-3"><label class="form-label">Imágenes</label><input class="form-control" name="imagenes" value="{{ json_encode($paquete->imagenes) }}"></div>
  <div class="mb-3"><label class="form-label">Activo</label><select class="form-select" name="activo"><option value="1" @selected($paquete->activo)==1>Sí</option><option value="0" @selected($paquete->activo)==0>No</option></select></div>
  <button class="btn btn-primary">Actualizar</button>
</form>
@endsection
