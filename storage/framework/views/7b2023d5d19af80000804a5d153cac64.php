<?php $__env->startSection('panel-content'); ?>
<h1 class="h3 mb-4">Bandeja de solicitudes</h1>
<div class="table-responsive">
<table class="table table-striped">
  <thead><tr><th>Cliente</th><th>Paquete</th><th>Fecha</th><th>Estado</th><th>Acciones</th></tr></thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($s->cliente->nombre); ?></td>
        <td><?php echo e($s->paquete->titulo); ?></td>
        <td><?php echo e($s->created_at->format('d/m/Y')); ?></td>
        <td><?php echo e($s->estado); ?></td>
        <td>
          <a href="<?php echo e(route('panel.oportunidad', $s->id)); ?>" class="btn btn-sm btn-primary">Ver</a>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr><td colspan="5">No hay solicitudes</td></tr>
    <?php endif; ?>
  </tbody>
</table>
</div>
<?php echo e($solicitudes->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/panel/bandeja.blade.php ENDPATH**/ ?>