
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-3">Clientes</h1>
<table class="table">
<thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th></tr></thead>
<tbody>
@foreach($clientes as $c)
<tr><td>{{ $c->id }}</td><td>{{ $c->nombre }}</td><td>{{ $c->email }}</td><td>{{ $c->telefono }}</td></tr>
@endforeach
</tbody>
</table>
{{ $clientes->links() }}
@endsection
