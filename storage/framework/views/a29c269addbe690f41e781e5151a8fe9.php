<?php if (isset($component)) { $__componentOriginal42b37f006f8ebbe12b66cfa27a5def06 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42b37f006f8ebbe12b66cfa27a5def06 = $attributes; } ?>
<?php $component = App\View\Components\PublicLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PublicLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Landing Viajes']); ?>
    
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
                    <div class="ph ph1" style="background-image: url('<?php echo e(asset('images/paisaje-a.jpg')); ?>'); background-size: cover;"></div>
                    <div class="ph ph2" style="background-image: url('<?php echo e(asset('images/paisaje-b.jpg')); ?>'); background-size: cover;"></div>
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
                <div class="big-photo" style="background-image: url('<?php echo e(asset('images/big-foto.jpg')); ?>'); background-size: cover;"></div>
            </div>
        </div>
    </section>

    <section class="top-destinos">
        <div class="container">
            <h2 class="section-title">Top de Destinos</h2>

            <div class="destinos-list">
                <div class="dest-card" style="background-image: url('<?php echo e(asset('images/italia.jpg')); ?>'); background-size: cover;">
                    <small style="color: white;">Italia</small>
                </div>
                <div class="dest-card" style="background-image: url('<?php echo e(asset('images/turquia.jpg')); ?>'); background-size: cover;">
                    <small style="color: white;">Turquía</small>
                </div>
                <div class="dest-card" style="background-image: url('<?php echo e(asset('images/tailandia.jpg')); ?>'); background-size: cover;">
                    <small style="color: white;">Tailandia</small>
                </div>
                <div class="dest-card" style="background-image: url('<?php echo e(asset('images/francia.jpg')); ?>'); background-size: cover;">
                    <small style="color: white;">Francia</small>
                </div>
            </div>
        </div>
    </section>

    <section class="tours">
        <div class="container">
            <h2 class="section-title">Tours Destacados</h2>

            <div class="tours-grid">
                <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="tour-card">
                    
                    <a href="<?php echo e(route('paquete.detalle', $p->id)); ?>" style="text-decoration: none; color: inherit;">
                        
                        <div 
                            class="tour-img" 
                            style="background-image: url('<?php echo e($p->imagenes[0] ?? asset('images/placeholder-tour.jpg')); ?>'); background-size: cover;">
                        </div>
                        
                        
                        <h4><?php echo e($p->titulo); ?></h4>
                    </a>
                    
                    
                    
                    <p><?php echo e(\Illuminate\Support\Str::limit($p->descripcion, 80)); ?></p>
                    
                    
                    <div class="precio">$<?php echo e(number_format($p->precio, 0, ',', '.')); ?></div>

                    
                    
                    
                </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <?php if(method_exists($paquetes, 'links')): ?>
            <div class="mt-4">
                <?php echo e($paquetes->links()); ?>

            </div>
            <?php endif; ?>
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
                <div class="f f1" style="background-image: url('<?php echo e(asset('images/flex-f1.jpg')); ?>'); background-size: cover;"></div>
                <div class="f f2" style="background-image: url('<?php echo e(asset('images/flex-f2.jpg')); ?>'); background-size: cover;"></div>
                <div class="f f3" style="background-image: url('<?php echo e(asset('images/flex-f3.jpg')); ?>'); background-size: cover;"></div>
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42b37f006f8ebbe12b66cfa27a5def06)): ?>
<?php $attributes = $__attributesOriginal42b37f006f8ebbe12b66cfa27a5def06; ?>
<?php unset($__attributesOriginal42b37f006f8ebbe12b66cfa27a5def06); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42b37f006f8ebbe12b66cfa27a5def06)): ?>
<?php $component = $__componentOriginal42b37f006f8ebbe12b66cfa27a5def06; ?>
<?php unset($__componentOriginal42b37f006f8ebbe12b66cfa27a5def06); ?>
<?php endif; ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/public/home.blade.php ENDPATH**/ ?>