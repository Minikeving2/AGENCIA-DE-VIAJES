
@extends('layouts.panel')
@section('panel-content')
<h1 class="h3 mb-4">Usuarios</h1>
<a href="{{ route('admin.usuarios.create') }}" class="btn btn-success mb-3">Nuevo usuario</a>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Rol</th><th>Acciones</th></tr></thead>
<tbody>
@foreach($users as $u)
<tr>
  <td>{{ $u->id }}</td>
  <td>{{ $u->name }}</td>
  <td>{{ $u->email }}</td>
  <td>{{ $u->role }}</td>
  <td><a href="{{ route('admin.usuarios.edit',$u->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a></td>
</tr>
@endforeach
</tbody>
</table>
{{ $users->links() }}
@endsection
