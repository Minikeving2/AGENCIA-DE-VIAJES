@extends('layouts.panel')
@section('title','Mis paquetes')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Mis paquetes</h3>
        <a href="{{ route('panel.paquetes.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Nuevo paquete
        </a>
    </div>

    @if(session('ok'))
      <div class="alert alert-success">{{ session('ok') }}</div>
    @endif

    <div class="row mb-3">
      <div class="col-md-4">
        <form method="GET">
          <div class="input-group">
            <input class="form-control" name="q" placeholder="Buscar..." value="{{ request('q') }}">
            <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>
    </div>

    <div class="row g-4">
        @foreach($paquetes as $p)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ $p->imagenes[0] ? asset($p->imagenes[0]) : 'https://picsum.photos/800/500?random='.$p->id }}" class="card-img-top" style="height:200px; object-fit:cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="mb-1">{{ $p->titulo }}</h5>
                    <p class="text-muted small mb-2">{{ $p->destino }} • {{ $p->duracion }}</p>
                    <p class="fw-bold mt-auto">${{ number_format($p->precio,0,',','.') }}</p>

                    <div class="d-flex gap-2 mt-3">
                        <a href="{{ route('panel.paquetes.edit',$p->id) }}" class="btn btn-sm btn-warning flex-grow-1"><i class="bi bi-pencil"></i> Editar</a>

                        <form action="{{ route('panel.paquetes.toggle',$p->id) }}" method="POST">
                            @csrf @method('PUT')
                            <button class="btn btn-sm {{ $p->activo ? 'btn-success' : 'btn-secondary' }}">
                                {{ $p->activo ? 'Activo' : 'Inactivo' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $paquetes->links() }}
    </div>
</div>
@endsection
