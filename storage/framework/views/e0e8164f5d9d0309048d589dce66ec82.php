<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-white sidebar vh-100 border-end">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('panel.bandeja')); ?>">Bandeja</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('panel.clientes')); ?>">Clientes</a></li>
          <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('panel.paquetes.index')); ?>">
        <i class="bi bi-box-seam"></i> Mis paquetes
    </a>
</li>
          <?php if(auth()->user() && auth()->user()->role === 'admin'): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">Admin</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      <?php echo $__env->yieldContent('panel-content'); ?>
    </main>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/layouts/panel.blade.php ENDPATH**/ ?>