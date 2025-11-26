
<?php $__env->startSection('title','Editar paquete'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h3>Editar paquete</h3>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul class="mb-0">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($err); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <form action="<?php echo e(route('panel.paquetes.update', $paquete->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="<?php echo e(old('titulo', $paquete->titulo)); ?>" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Destino</label>
                <input type="text" name="destino" class="form-control" value="<?php echo e(old('destino', $paquete->destino)); ?>">
            </div>

            <div class="col-md-4">
                <label class="form-label">Duración</label>
                <input type="text" name="duracion" class="form-control" value="<?php echo e(old('duracion', $paquete->duracion)); ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control" value="<?php echo e(old('precio', $paquete->precio)); ?>" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Añadir imágenes</label>
                <input type="file" name="imagenes[]" multiple class="form-control">
            </div>

            <div class="col-12">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" rows="5" class="form-control"><?php echo e(old('descripcion', $paquete->descripcion)); ?></textarea>
            </div>

            <div class="col-12">
                <h5>Imágenes actuales</h5>
                <div class="d-flex gap-2 flex-wrap mb-3">
                    <?php $__currentLoopData = $paquete->imagenes ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="position-relative">
                        <img src="<?php echo e(asset($img)); ?>" style="width:150px;height:100px;object-fit:cover;" class="rounded">
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-success">Guardar cambios</button>
                <a href="<?php echo e(route('panel.paquetes.index')); ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/panel/paquetes/edit.blade.php ENDPATH**/ ?>