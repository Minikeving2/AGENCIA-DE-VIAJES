<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold mb-4">Catálogo de paquetes</h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="bg-white p-4 rounded shadow">
    <h3 class="font-semibold"><?php echo e($p->titulo); ?></h3>
    <p><?php echo e($p->destino); ?> — <?php echo e($p->duracion); ?> días</p>
    <p class="font-bold"><?php echo e(number_format($p->precio,0,',','.')); ?> COP</p>
    <a href="<?php echo e(route('paquetes.show', $p->id)); ?>" class="text-blue-600">Ver</a>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="mt-4"><?php echo e($paquetes->links()); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/catalogo/index.blade.php ENDPATH**/ ?>