
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Bandeja de solicitudes</h1>
<div class="table-responsive">
<table class="table table-striped">
  <thead><tr><th>Cliente</th><th>Paquete</th><th>Fecha</th><th>Estado</th><th>Acciones</th></tr></thead>
  <tbody>
    @forelse($solicitudes as $s)
      <tr>
        <td>{{ $s->cliente->nombre }}</td>
        <td>{{ $s->paquete->titulo }}</td>
        <td>{{ $s->created_at->format('d/m/Y') }}</td>
        <td>{{ $s->estado }}</td>
        <td>
          <a href="{{ route('panel.oportunidad', $s->id) }}" class="btn btn-sm btn-primary">Ver</a>
        </td>
      </tr>
    @empty
      <tr><td colspan="5">No hay solicitudes</td></tr>
    @endforelse
  </tbody>
</table>
</div>
{{ $solicitudes->links() }}
@endsection
