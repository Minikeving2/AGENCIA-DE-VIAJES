@extends('layouts.main')

@section('content')

<div class="container py-5">

    <!-- Título -->
    <h1 class="fw-bold mb-4">{{ $paquete->titulo }}</h1>

    <div class="row g-4">

        <!-- Galería -->
        <div class="col-lg-7">
            <div id="galeriaPaquete" class="carousel slide shadow rounded overflow-hidden">
                <div class="carousel-inner">

                    @foreach($paquete->imagenes as $index => $img)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset($img) }}" class="d-block w-100"
                                 style="height: 420px; object-fit: cover;">
                        </div>
                    @endforeach

                </div>

                <button class="carousel-control-prev" type="button"
                        data-bs-target="#galeriaPaquete" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button"
                        data-bs-target="#galeriaPaquete" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- Información -->
        <div class="col-lg-5">
            <div class="card p-4 shadow-sm">

                <h3 class="fw-semibold">{{ $paquete->titulo }}</h3>
                <p class="text-muted mb-1">{{ $paquete->destino }} • {{ $paquete->duracion }} días</p>

                <h2 class="text-primary fw-bold mt-3 mb-4">
                    ${{ number_format($paquete->precio, 0, ',', '.') }}
                </h2>

                <a href="{{ route('cotizar.form', $paquete->id) }}" class="btn btn-success w-100 mb-3">
                    Solicitar cotización
                </a>

                <h6 class="fw-bold">Información adicional</h6>
                <p class="text-muted small">
                    Fechas flexibles. Consulta descuentos para grupos y viajes personalizados.
                </p>

                <hr>

                <h6 class="fw-bold mt-3">Contacto</h6>
                <p class="small mb-1"><strong>Tel:</strong> +57 300 000 0000</p>
                <p class="small"><strong>Email:</strong> ventas@agenciax.com</p>

            </div>
        </div>

    </div>

    <!-- Descripción -->
    <div class="row mt-5">
        <div class="col-lg-8">

            <h4 class="fw-bold mb-3">Descripción del viaje</h4>
            <p class="text-muted" style="line-height: 1.7;">
                {{ $paquete->descripcion ?? 'Descubre una experiencia inolvidable diseñada para viajeros que buscan aventura, descanso y cultura en uno solo...' }}
            </p>

            <h4 class="fw-bold mt-4 mb-3">Incluye</h4>
            <ul class="text-muted">
              @foreach(explode("\n", $paquete->itinerario) as $item)
                  @if(trim($item) != '')
                      <li>{{ trim($item, "• ") }}</li>
                  @endif
              @endforeach
            </ul>

        </div>
    </div>

</div>

@endsection
