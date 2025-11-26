<?php $auth = app('Illuminate\Support\Facades\Auth'); ?>
<?php $Route = app('Illuminate\Support\Facades\Route'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo e($title ?? 'TravelNow'); ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Alkatra:wght@400;700&family=Caveat:wght@400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Styles - USANDO VITE -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>

    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>">TravelNow</a>
            </div>

            <nav class="main-nav" aria-label="Main navigation">
                
                <a href="<?php echo e(route('home')); ?>">Inicio</a>
                <a href="<?php echo e(route('paquetes')); ?>">Destinos</a>
                <a href="<?php echo e(route('paquetes')); ?>">Tours</a>
                
                <a href="#">Nosotros</a>
                <a href="#">Contacto</a>
            </nav>

            <div class="auth">
                <?php if($auth::check()): ?>
                    
                    <a href="<?php echo e(route('dashboard')); ?>" class="login">
                        <i class="fa-solid fa-gauge"></i> Dashboard
                    </a>
                <?php else: ?>
                    
                    <a href="<?php echo e(route('login')); ?>" class="login">
                        <i class="fa-solid fa-user"></i> Login
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- CONTENIDO ESPECÍFICO DE LA VISTA -->
    <main>
        <?php echo e($slot); ?> 
    </main>
    
    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <div class="footer-logo"><a href="<?php echo e(route('home')); ?>">TravelNow</a></div>
                <p class="footer-desc">Reservas seguras · Atención 24/7 · Experiencias únicas</p>

                <div class="footer-social" aria-label="Redes sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <div class="col">
                    <h4>Empresa</h4>
                    <a href="#">Nosotros</a>
                    <a href="#">Servicios</a>
                    <a href="#">Afiliados</a>
                </div>

                <div class="col">
                    <h4>Soporte</h4>
                    <a href="#">FAQ</a>
                    <a href="#">Ayuda</a>
                    
                    <a href="#">Contáctanos</a>
                </div>

                <div class="col">
                    <h4>Legal</h4>
                    
                    <a href="#">Términos</a>
                    <a href="#">Privacidad</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <small>© 2024 TravelNow — Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/layouts/public.blade.php ENDPATH**/ ?>