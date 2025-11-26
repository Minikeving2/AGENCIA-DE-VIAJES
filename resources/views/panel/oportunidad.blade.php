@extends('layouts.panel')

@section('panel-content')

<h1 class="h3 mb-3">Oportunidad #{{ $solicitud->id }}</h1>

<div class="row">
    <div class="col-md-6">

        <div class="card mb-3">
            <div class="card-header fw-bold">
                Información del cliente
            </div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $solicitud->cliente->nombre }}</p>
                <p><strong>Email:</strong> {{ $solicitud->cliente->email }}</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header fw-bold">
                Información del paquete
            </div>
            <div class="card-body">
                <p><strong>Paquete:</strong> {{ $solicitud->paquete->titulo }}</p>
                <p><strong>Fecha inicio:</strong> {{ $solicitud->fecha_inicio ?? 'Sin definir' }}</p>
                <p><strong>Viajeros:</strong> {{ $solicitud->viajeros }}</p>
                <p><strong>Notas del cliente:</strong> {{ $solicitud->notas ?? 'Sin notas' }}</p>
            </div>
        </div>

    </div>

    <div class="col-md-6">

        <div class="card mb-3">
            <div class="card-header fw-bold">
                Actualizar estado
            </div>
            <div class="card-body">

                <form action="{{ route('panel.oportunidad.estado', $solicitud->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label class="form-label">Estado</label>
                    <select name="estado" class="form-select">
    <option value="pendiente"  {{ $solicitud->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
    <option value="en_proceso" {{ $solicitud->estado == 'en_proceso' ? 'selected' : '' }}>En proceso</option>
    <option value="cerrado"    {{ $solicitud->estado == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
</select>

                    <button class="btn btn-primary mt-3 w-100">Actualizar estado</button>
                </form>

            </div>
        </div>

        <div class="card">
            <div class="card-header fw-bold">
                Notas internas
            </div>
            <div class="card-body">

                <form action="{{ route('panel.oportunidad.nota', $solicitud->id) }}" method="POST">
                    @csrf

                    <label class="form-label">Agregar nota</label>
                    <textarea name="nota" class="form-control" rows="3" required></textarea>

                    <button class="btn btn-secondary mt-2 w-100">Guardar nota</button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
