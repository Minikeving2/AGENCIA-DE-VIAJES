<?php $__env->startSection('title','Paquetes - AgenciaX'); ?>

<?php $__env->startSection('content'); ?>
<div class="py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Catálogo de paquetes</h1>
    <form class="d-flex" method="GET" action="<?php echo e(route('paquetes')); ?>">
      <input class="form-control me-2" type="search" name="q" value="<?php echo e(request('q')); ?>" placeholder="Buscar destino">
      <button class="btn btn-outline-primary">Buscar</button>
    </form>
  </div>

  <div class="row g-4">
    <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="<?php echo e($p->imagenes[0] ?? 'https://images.unsplash.com/photo-1519817650390-64a93db511aa?auto=format&fit=crop&w=900&q=80'); ?>" class="card-img-top" alt="">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?php echo e($p->titulo); ?></h5>
          <p class="text-muted"><?php echo e(\Illuminate\Support\Str::limit($p->descripcion, 120)); ?></p>
          <div class="mt-auto d-flex justify-content-between align-items-center">
            <a href="<?php echo e(route('paquete.detalle',$p->id)); ?>" class="btn btn-primary">Ver</a>
            <div class="fw-bold">$<?php echo e(number_format($p->precio,0,',','.')); ?></div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <div class="mt-4">
    <?php echo e($paquetes->links()); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/public/paquetes.blade.php ENDPATH**/ ?>