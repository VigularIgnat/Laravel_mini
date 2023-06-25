

<?php $__env->startSection('title_block'); ?>
    Повідомлення
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Всі повідомлення</h1>
     <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">
            <h3><?php echo e($elem->subject); ?></h3>
            <p><?php echo e($elem->email); ?></p>
            <p><?php echo e($elem->sum); ?></p>
            <p><small><?php echo e($elem->created_at); ?></small></p>

            <a href="<?php echo e(route('contact-data-one', $elem->id)); ?>"><button class="btn btn-warning">Szczególowo</button></a>
        </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\domains\laravel\laravel.mini\resources\views/messages.blade.php ENDPATH**/ ?>