

<?php $__env->startSection('title_block'); ?>
    Оновлення запису
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Оновлення запису</h1>
   
    <form  action="<?php echo e(route('contact-update-submit', $data->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Ваше ім'я</label>
            <input type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Enter name"id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo e($data->email); ?>" placeholder="Enter email"id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Заголовок</label>
            <input type="text" name="subject" value="<?php echo e($data->subject); ?>" placeholder="Enter topic"id="topic" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea type="text" name="message" 
             placeholder="Введите сообщение"id="topic" class="form-control"><?php echo e($data->message); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Оновити</button>
    </form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\domains\laravel\laravel.mini\resources\views/update-message.blade.php ENDPATH**/ ?>