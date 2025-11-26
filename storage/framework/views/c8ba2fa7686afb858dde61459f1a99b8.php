
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $__env->yieldContent('title','Agencia de Viajes'); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body { background: #f8fafc; }
    .hero-overlay { background: rgba(0,0,0,0.35); padding: 80px 0; color: #fff; }
    .card-img-top { height: 220px; object-fit: cover; }
    .package-gallery img { max-height: 320px; object-fit: cover; width:100%; }
    footer { background:#0d6efd; color:#fff; padding:30px 0; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?php echo e(route('home')); ?>">AgenciaX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('paquetes')); ?>">Paquetes</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('paquetes')); ?>#destinos">Destinos</a></li>
        <?php if(auth()->guard()->check()): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Panel</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><?php echo e(auth()->user()->name); ?></a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="POST" action="<?php echo e(route('logout')); ?>"><?php echo csrf_field(); ?>
                  <button class="dropdown-item">Cerrar sesión</button>
                </form>
              </li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Ingresar</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Registrarse</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<main class="py-4">
  <div class="container">
    <?php if(session('success')): ?><div class="alert alert-success"><?php echo e(session('success')); ?></div><?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
  </div>
</main>

<footer class="mt-5">
  <div class="container text-white">
    <div class="row">
      <div class="col-md-4">
        <h5>AgenciaX</h5>
        <p>Expertos en viajes personalizados. Contáctanos para armar tu próxima aventura.</p>
      </div>
      <div class="col-md-4">
        <h6>Enlaces</h6>
        <ul class="list-unstyled">
          <li><a class="text-white" href="<?php echo e(route('paquetes')); ?>">Paquetes</a></li>
          <li><a class="text-white" href="<?php echo e(route('paquetes')); ?>#destinos">Destinos</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6>Contacto</h6>
        <p>Email: info@agenciax.com<br>Tel: +57 300 000 0000</p>
      </div>
    </div>
    <div class="text-center small mt-3">© <?php echo e(date('Y')); ?> AgenciaX. Todos los derechos reservados.</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ once: true });
</script>
</body>
</html>
<?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/layouts/main.blade.php ENDPATH**/ ?>