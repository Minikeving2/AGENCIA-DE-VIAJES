<?php $__env->startSection('panel-content'); ?>

<h1 class="h3 mb-3">Oportunidad #<?php echo e($solicitud->id); ?></h1>

<div class="row">
    <div class="col-md-6">

        <div class="card mb-3">
            <div class="card-header fw-bold">
                Información del cliente
            </div>
            <div class="card-body">
                <p><strong>Nombre:</strong> <?php echo e($solicitud->cliente->nombre); ?></p>
                <p><strong>Email:</strong> <?php echo e($solicitud->cliente->email); ?></p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header fw-bold">
                Información del paquete
            </div>
            <div class="card-body">
                <p><strong>Paquete:</strong> <?php echo e($solicitud->paquete->titulo); ?></p>
                <p><strong>Fecha inicio:</strong> <?php echo e($solicitud->fecha_inicio ?? 'Sin definir'); ?></p>
                <p><strong>Viajeros:</strong> <?php echo e($solicitud->viajeros); ?></p>
                <p><strong>Notas del cliente:</strong> <?php echo e($solicitud->notas ?? 'Sin notas'); ?></p>
            </div>
        </div>

    </div>

    <div class="col-md-6">

        <div class="card mb-3">
            <div class="card-header fw-bold">
                Actualizar estado
            </div>
            <div class="card-body">

                <form action="<?php echo e(route('panel.oportunidad.estado', $solicitud->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <label class="form-label">Estado</label>
                    <select name="estado" class="form-select">
    <option value="pendiente"  <?php echo e($solicitud->estado == 'pendiente' ? 'selected' : ''); ?>>Pendiente</option>
    <option value="en_proceso" <?php echo e($solicitud->estado == 'en_proceso' ? 'selected' : ''); ?>>En proceso</option>
    <option value="cerrado"    <?php echo e($solicitud->estado == 'cerrado' ? 'selected' : ''); ?>>Cerrado</option>
</select>

                    <button class="btn btn-primary mt-3 w-100">Actualizar estado</button>
                </form>

            </div>
        </div>

        <div class="card">
            <div class="card-header fw-bold">
                Notas internas
            </div>
            <div class="card-body">

                <form action="<?php echo e(route('panel.oportunidad.nota', $solicitud->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <label class="form-label">Agregar nota</label>
                    <textarea name="nota" class="form-control" rows="3" required></textarea>

                    <button class="btn btn-secondary mt-2 w-100">Guardar nota</button>
                </form>

            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SISTEMAS\Desktop\laravel_skeleton\agencia\resources\views/panel/oportunidad.blade.php ENDPATH**/ ?>