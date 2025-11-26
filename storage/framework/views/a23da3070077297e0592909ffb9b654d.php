<?php $__env->startSection('panel-content'); ?>
<h1 class="h3 mb-3">Clientes</h1>
<table class="table">
<thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th></tr></thead>
<tbody>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr><td><?php echo e($c->id); ?></td><td><?php echo e($c->nombre); ?></td><td><?php echo e($c->email); ?></td><td><?php echo e($c->telefono); ?></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo e($clientes->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/panel/clientes.blade.php ENDPATH**/ ?>