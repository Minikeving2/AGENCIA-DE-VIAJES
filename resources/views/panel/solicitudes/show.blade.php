@extends('layouts.panel')
@section('title','Solicitud')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-0">Solicitud #{{ $sol->id }}</h5>
                <small class="text-muted">Cliente: {{ $sol->cliente->nombre ?? 'N/A' }}</small>
            </div>

            <div>
                <form action="{{ route('panel.solicitudes.estado', $sol->id) }}" method="POST" class="d-inline">
                    @csrf @method('PUT')
                    <select name="estado" class="form-select d-inline-block" style="width:auto;">
                        <option value="Pendiente" {{ $sol->estado=='Pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="En Proceso" {{ $sol->estado=='En Proceso' ? 'selected' : '' }}>En Proceso</option>
                        <option value="Cerrada" {{ $sol->estado=='Cerrada' ? 'selected' : '' }}>Cerrada</option>
                    </select>
                    <button class="btn btn-sm btn-primary">Guardar</button>
                </form>
            </div>
        </div>

        <div class="card-body">
            <h5>{{ $sol->paquete->titulo ?? 'Paquete' }}</h5>
            <p><strong>Viajeros:</strong> {{ $sol->viajeros }}</p>
            <p><strong>Fecha inicio:</strong> {{ $sol->fecha_inicio ?? '—' }} </p>
            <p><strong>Notas:</strong> <pre style="white-space:pre-wrap;">{{ $sol->notas }}</pre></p>

            <hr>

            <h6>Agregar nota interna</h6>
            <form action="{{ route('panel.solicitudes.nota', $sol->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea name="nota" class="form-control" rows="3" required></textarea>
                </div>
                <button class="btn btn-outline-primary">Agregar nota</button>
            </form>
        </div>
    </div>
</div>
@endsection
