<x-public-layout title="Landing Viajes">
    
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-left">
                <h1 class="hero-title">Explora el mundo<br><span>Viajes & Aventuras</span></h1>

                <p class="hero-sub">Encuentra paquetes, tours y experiencias diseñadas para ti.</p>

                <div class="hero-cta">
                    <button class="btn primary" onclick="location.href='#'">
                        Conocer más
                    </button>
                </div>
            </div>

            <div class="hero-right">
                <div class="hero-photos">
                    <div class="ph ph1" style="background-image: url('{{ asset('images/paisaje-a.jpg') }}'); background-size: cover;"></div>
                    <div class="ph ph2" style="background-image: url('{{ asset('images/paisaje-b.jpg') }}'); background-size: cover;"></div>
                </div>

                <form class="search-form" aria-label="Buscar tours">
                    <input type="text" placeholder="Destino" />
                    <input type="date" />
                    <select>
                        <option>2 Personas</option>
                        <option>1 Persona</option>
                        <option>3 Personas</option>
                    </select>
                    <button class="btn accent"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
                </form>
            </div>
        </div>
    </section>

    <section class="categorias">
        <div class="container">
            <h2 class="section-title">Elige Tu Tipo de Tour</h2>
            <div class="cat-list">
                <div class="cat-item"><i class="fa-solid fa-mountain"></i><span>Aventura</span></div>
                <div class="cat-item"><i class="fa-solid fa-umbrella-beach"></i><span>Playa</span></div>
                <div class="cat-item"><i class="fa-solid fa-person-hiking"></i><span>Trekking</span></div>
                <div class="cat-item"><i class="fa-solid fa-city"></i><span>Ciudad</span></div>
                <div class="cat-item"><i class="fa-solid fa-heart"></i><span>Romántico</span></div>
            </div>
        </div>
    </section>

    <section class="planifica">
        <div class="container plan-grid">
            <div class="plan-left">
                <h3 class="plan-title">Planifica tu viaje<br><span>con nosotros</span></h3>
                <p>Ofrecemos opciones personalizadas, atención 24/7 y la mejor selección de paquetes.</p>

                <ul class="plan-features">
                    <li><i class="fa-solid fa-check"></i> Paquetes flexibles</li>
                    <li><i class="fa-solid fa-check"></i> Garantía de mejor precio</li>
                    <li><i class="fa-solid fa-check"></i> Atención personalizada</li>
                </ul>

                <button class="btn primary" onclick="location.href='#'">Conocer más</button>
            </div>

            <div class="plan-right">
                <div class="big-photo" style="background-image: url('{{ asset('images/big-foto.jpg') }}'); background-size: cover;"></div>
            </div>
        </div>
    </section>

    <section class="top-destinos">
        <div class="container">
            <h2 class="section-title">Top de Destinos</h2>

            <div class="destinos-list">
                <div class="dest-card" style="background-image: url('{{ asset('images/italia.jpg') }}'); background-size: cover;">
                    <small style="color: white;">Italia</small>
                </div>
                <div class="dest-card" style="background-image: url('{{ asset('images/turquia.jpg') }}'); background-size: cover;">
                    <small style="color: white;">Turquía</small>
                </div>
                <div class="dest-card" style="background-image: url('{{ asset('images/tailandia.jpg') }}'); background-size: cover;">
                    <small style="color: white;">Tailandia</small>
                </div>
                <div class="dest-card" style="background-image: url('{{ asset('images/francia.jpg') }}'); background-size: cover;">
                    <small style="color: white;">Francia</small>
                </div>
            </div>
        </div>
    </section>

    <section class="tours">
        <div class="container">
            <h2 class="section-title">Tours Destacados</h2>

            <div class="tours-grid">
                @foreach($paquetes as $p)
                <article class="tour-card">
                    {{-- Enlace que envuelve toda la tarjeta para una mejor UX --}}
                    <a href="{{ route('paquete.detalle', $p->id) }}" style="text-decoration: none; color: inherit;">
                        {{-- Imagen del tour --}}
                        <div 
                            class="tour-img" 
                            style="background-image: url('{{ $p->imagenes[0] ?? asset('images/placeholder-tour.jpg') }}'); background-size: cover;">
                        </div>
                        
                        {{-- Título --}}
                        <h4>{{ $p->titulo }}</h4>
                    </a>
                    
                    {{-- Descripción --}}
                    {{-- Usamos Str::limit para no sobrecargar la tarjeta, como en tu ejemplo --}}
                    <p>{{ \Illuminate\Support\Str::limit($p->descripcion, 80) }}</p>
                    
                    {{-- Precio --}}
                    <div class="precio">${{ number_format($p->precio, 0, ',', '.') }}</div>

                    {{-- Opcional: Agregar un botón "Ver Detalle" --}}
                    {{-- Si deseas un botón visible, descomenta esta línea y asegúrate que tu CSS tenga estilo para .btn --}}
                    {{-- <a href="{{ route('paquete.detalle', $p->id) }}" class="btn primary">Ver Detalle</a> --}}
                </article>
                @endforeach
            </div>
            
            {{-- Si $paquetes es un objeto paginado, muestra los links de paginación --}}
            @if(method_exists($paquetes, 'links'))
            <div class="mt-4">
                {{ $paquetes->links() }}
            </div>
            @endif
        </div>
    </section>

    <section class="flexibles">
        <div class="container flex-grid">
            <div class="flex-left">
                <h3 class="mini">¿Por qué somos los mejores?</h3>
                <h2 class="flex-title">Mantén las cosas<br><span>Flexibles</span></h2>

                <button class="btn primary" onclick="location.href='#'">Conocer más</button>

                <div class="stats">
                    <div class="stat">
                        <strong>120+</strong>
                        <span>Destinos</span>
                    </div>
                    <div class="stat">
                        <strong>32k+</strong>
                        <span>Viajeros felices</span>
                    </div>
                    <div class="stat">
                        <strong>500+</strong>
                        <span>Paquetes</span>
                    </div>
                    <div class="stat">
                        <strong>4k+</strong>
                        <span>Reseñas positivas</span>
                    </div>
                </div>
            </div>

            <div class="flex-right">
                <div class="f f1" style="background-image: url('{{ asset('images/flex-f1.jpg') }}'); background-size: cover;"></div>
                <div class="f f2" style="background-image: url('{{ asset('images/flex-f2.jpg') }}'); background-size: cover;"></div>
                <div class="f f3" style="background-image: url('{{ asset('images/flex-f3.jpg') }}'); background-size: cover;"></div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container cta-inner">
            <h2>¿Listo para viajar?</h2>
            <p>Somos una plataforma líder en reservas de tours en línea.</p>
            <button class="btn primary">Comenzar ahora</button>
        </div>
    </section>

</x-public-layout>