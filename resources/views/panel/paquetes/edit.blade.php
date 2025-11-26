@extends('layouts.panel')
@section('title','Editar paquete')

@section('content')
<div class="container py-4">
    <h3>Editar paquete</h3>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('panel.paquetes.update', $paquete->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $paquete->titulo) }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Destino</label>
                <input type="text" name="destino" class="form-control" value="{{ old('destino', $paquete->destino) }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Duración</label>
                <input type="text" name="duracion" class="form-control" value="{{ old('duracion', $paquete->duracion) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control" value="{{ old('precio', $paquete->precio) }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Añadir imágenes</label>
                <input type="file" name="imagenes[]" multiple class="form-control">
            </div>

            <div class="col-12">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" rows="5" class="form-control">{{ old('descripcion', $paquete->descripcion) }}</textarea>
            </div>

            <div class="col-12">
                <h5>Imágenes actuales</h5>
                <div class="d-flex gap-2 flex-wrap mb-3">
                    @foreach($paquete->imagenes ?? [] as $img)
                      <div class="position-relative">
                        <img src="{{ asset($img) }}" style="width:150px;height:100px;object-fit:cover;" class="rounded">
                      </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-success">Guardar cambios</button>
                <a href="{{ route('panel.paquetes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
