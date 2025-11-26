@extends('layouts.panel')
@section('title','Solicitudes')

@section('content')
<div class="container py-4">
    <h3>Solicitudes</h3>

    <div class="row mb-3">
      <div class="col-md-4">
        <form method="GET">
          <div class="input-group">
            <select name="estado" class="form-select">
              <option value="">-- Estado --</option>
              <option value="Pendiente" {{ request('estado')=='Pendiente' ? 'selected' : '' }}>Pendiente</option>
              <option value="En Proceso" {{ request('estado')=='En Proceso' ? 'selected' : '' }}>En Proceso</option>
              <option value="Cerrada" {{ request('estado')=='Cerrada' ? 'selected' : '' }}>Cerrada</option>
            </select>
            <button class="btn btn-outline-secondary"><i class="bi bi-funnel"></i></button>
          </div>
        </form>
      </div>
    </div>

    <div class="list-group">
      @forelse($solicitudes as $s)
        <a href="{{ route('panel.solicitudes.show', $s->id) }}" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $s->cliente->nombre ?? 'Cliente' }} — {{ $s->paquete->titulo ?? 'Paquete' }}</h5>
            <small>{{ $s->created_at->format('Y-m-d H:i') }}</small>
          </div>
          <p class="mb-1 text-truncate">{{ $s->notas }}</p>
          <small class="text-muted">{{ $s->estado }}</small>
        </a>
      @empty
        <div class="alert alert-info">No hay solicitudes</div>
      @endforelse
    </div>

    <div class="mt-4">
      {{ $solicitudes->links() }}
    </div>
</div>
@endsection
