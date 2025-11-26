<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold"><?php echo e($paquete->titulo); ?></h1>
<p><?php echo e($paquete->descripcion); ?></p>
<p class="font-bold mt-2">Precio: <?php echo e(number_format($paquete->precio,0,',','.')); ?> COP</p>
<a href="<?php echo e(route('solicitud.create', $paquete->id)); ?>" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">Solicitar cotización</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/catalogo/show.blade.php ENDPATH**/ ?>