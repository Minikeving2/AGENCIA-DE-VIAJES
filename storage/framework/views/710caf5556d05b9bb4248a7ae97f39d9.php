<?php $__env->startSection('title','Mis paquetes'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Mis paquetes</h3>
        <a href="<?php echo e(route('panel.paquetes.create')); ?>" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Nuevo paquete
        </a>
    </div>

    <?php if(session('ok')): ?>
      <div class="alert alert-success"><?php echo e(session('ok')); ?></div>
    <?php endif; ?>

    <div class="row mb-3">
      <div class="col-md-4">
        <form method="GET">
          <div class="input-group">
            <input class="form-control" name="q" placeholder="Buscar..." value="<?php echo e(request('q')); ?>">
            <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>
    </div>

    <div class="row g-4">
        <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="<?php echo e($p->imagenes[0] ? asset($p->imagenes[0]) : 'https://picsum.photos/800/500?random='.$p->id); ?>" class="card-img-top" style="height:200px; object-fit:cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="mb-1"><?php echo e($p->titulo); ?></h5>
                    <p class="text-muted small mb-2"><?php echo e($p->destino); ?> • <?php echo e($p->duracion); ?></p>
                    <p class="fw-bold mt-auto">$<?php echo e(number_format($p->precio,0,',','.')); ?></p>

                    <div class="d-flex gap-2 mt-3">
                        <a href="<?php echo e(route('panel.paquetes.edit',$p->id)); ?>" class="btn btn-sm btn-warning flex-grow-1"><i class="bi bi-pencil"></i> Editar</a>

                        <form action="<?php echo e(route('panel.paquetes.toggle',$p->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                            <button class="btn btn-sm <?php echo e($p->activo ? 'btn-success' : 'btn-secondary'); ?>">
                                <?php echo e($p->activo ? 'Activo' : 'Inactivo'); ?>

                            </button>
                        </form>
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

<?php echo $__env->make('layouts.panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/panel/paquetes/index.blade.php ENDPATH**/ ?>