
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Paquetes</h1>
<a href="{{ route('admin.paquetes.create') }}" class="btn btn-success mb-3">Nuevo paquete</a>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Título</th><th>Destino</th><th>Precio</th><th>Acciones</th></tr></thead>
<tbody>
@foreach($paquetes as $p)
<tr>
  <td>{{ $p->id }}</td>
  <td>{{ $p->titulo }}</td>
  <td>{{ $p->destino }}</td>
  <td>${{ number_format($p->precio,0,',','.') }}</td>
  <td><a href="{{ route('admin.paquetes.edit',$p->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a></td>
</tr>
@endforeach
</tbody>
</table>
{{ $paquetes->links() }}
@endsection
