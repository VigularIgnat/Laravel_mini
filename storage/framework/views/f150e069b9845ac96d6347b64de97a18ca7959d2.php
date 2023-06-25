

<?php $__env->startSection('title_block'); ?>
    Velcome to laravel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Velcome to laravel</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aside'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('aside'); ?>
    <p>I really like corn!</p>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\domains\laravel.mini\resources\views/main.blade.php ENDPATH**/ ?>