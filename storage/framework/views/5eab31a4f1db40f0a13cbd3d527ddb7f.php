<?php $__env->startSection('title','Editar perfil'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-body">
    <h3>Editar perfil</h3>
    <form method="POST" action="<?php echo e(route('profile.update')); ?>"><?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
      <div class="mb-3"><label class="form-label">Nombre</label><input class="form-control" name="name" value="<?php echo e($user->name); ?>"></div>
      <div class="mb-3"><label class="form-label">Email</label><input class="form-control" name="email" value="<?php echo e($user->email); ?>"></div>
      <div class="mb-3"><label class="form-label">Nueva contraseña</label><input class="form-control" name="password" type="password"></div>
      <div class="mb-3"><label class="form-label">Confirmar contraseña</label><input class="form-control" name="password_confirmation" type="password"></div>
      <button class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/profile/edit.blade.php ENDPATH**/ ?>