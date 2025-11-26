<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold">Solicitar cotización</h1>
<form method="POST" action="<?php echo e(route('solicitud.store')); ?>" class="mt-4">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="paquete_id" value="<?php echo e($paquete); ?>">
  <div><label>Nombre</label><input name="nombre" class="border p-2 w-full" required></div>
  <div><label>Email</label><input name="email" type="email" class="border p-2 w-full" required></div>
  <div><label>Teléfono</label><input name="telefono" class="border p-2 w-full"></div>
  <div class="mt-2"><label><input type="checkbox" name="consentimiento" value="1" required> Acepto tratamiento de datos</label></div>
  <div class="mt-4"><button class="bg-blue-600 text-white px-4 py-2 rounded">Enviar</button></div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/solicitud/create.blade.php ENDPATH**/ ?>