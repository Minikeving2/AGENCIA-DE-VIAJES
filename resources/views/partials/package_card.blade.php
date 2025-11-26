
<div class="card h-100 shadow-sm">
  <img src="{{ $p->imagenes[0] ?? 'https://images.unsplash.com/photo-1519817650390-64a93db511aa?auto=format&fit=crop&w=900&q=80' }}" class="card-img-top" alt="">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">{{ $p->titulo }}</h5>
    <p class="text-muted">{{ \Illuminate\Support\Str::limit($p->descripcion, 110) }}</p>
    <div class="mt-auto d-flex justify-content-between align-items-center">
      <a href="{{ route('paquete.detalle',$p->id) }}" class="btn btn-primary">Ver</a>
      <div class="fw-bold">${{ number_format($p->precio,0,',','.') }}</div>
    </div>
  </div>
</div>
