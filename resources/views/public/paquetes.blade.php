
@extends('layouts.main')
@section('title','Paquetes - AgenciaX')

@section('content')
<div class="py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Catálogo de paquetes</h1>
    <form class="d-flex" method="GET" action="{{ route('paquetes') }}">
      <input class="form-control me-2" type="search" name="q" value="{{ request('q') }}" placeholder="Buscar destino">
      <button class="btn btn-outline-primary">Buscar</button>
    </form>
  </div>

  <div class="row g-4">
    @foreach($paquetes as $p)
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ $p->imagenes[0] ?? 'https://images.unsplash.com/photo-1519817650390-64a93db511aa?auto=format&fit=crop&w=900&q=80' }}" class="card-img-top" alt="">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{ $p->titulo }}</h5>
          <p class="text-muted">{{ \Illuminate\Support\Str::limit($p->descripcion, 120) }}</p>
          <div class="mt-auto d-flex justify-content-between align-items-center">
            <a href="{{ route('paquete.detalle',$p->id) }}" class="btn btn-primary">Ver</a>
            <div class="fw-bold">${{ number_format($p->precio,0,',','.') }}</div>
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
