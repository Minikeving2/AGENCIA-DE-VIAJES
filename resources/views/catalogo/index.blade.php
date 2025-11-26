<x-public-layout>
    <section class="hero-results">
        <div class="container">
            <div class="photo-banner">
                 <img src="{{ asset('img/banner-tours.jpg') }}" style="width:100%; height:100%; object-fit:cover; border-radius:12px; opacity:0.6;">
            </div>
            <h1 class="page-title">Paquetes de Tours</h1>
            <small>Home / Tours</small>
        </div>
    </section>

    <section class="secondary-search-bar">
        </section>

    <section class="results-section">
        <div class="container results-grid">
            
            <aside class="sidebar-filters">
                </aside>
            
            <main class="results-list">
                <div class="results-header">
                    <p><strong>{{ $paquetes->count() }} Tours</strong> encontrados</p>
                </div>

                <div class="tours-grid-results">
                    @foreach($paquetes as $paquete)
                    <article class="tour-card-result">
                        <div class="tour-img-result">
                             <img src="{{ $paquete->imagen ?? asset('img/placeholder.jpg') }}" style="width:100%; height:100%; object-fit:cover;">
                             <i class="fa-regular fa-heart"></i>
                        </div>
                        
                        <div class="tour-info">
                            <small class="location">{{ $paquete->destino ?? 'Varios destinos' }}</small>
                            <p class="description">{{ $paquete->nombre }}</p>
                            
                            <div class="details-row">
                                <div class="duration">
                                    <i class="fa-solid fa-clock"></i>
                                    <small>{{ $paquete->duracion }} días</small>
                                </div>
                            </div>

                            <div class="price-row">
                                <div class="price"><strong>${{ $paquete->precio }}</strong></div>
                                <a href="{{ route('paquetes.show', $paquete->id) }}" class="btn primary small-btn">Ver Tour</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                
                <div class="pagination">
                    {{ $paquetes->links() }} 
                </div>

            </main>
        </div>
    </section>
</x-public-layout>