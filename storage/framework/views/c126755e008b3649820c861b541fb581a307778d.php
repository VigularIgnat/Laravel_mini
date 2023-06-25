

<?php $__env->startSection('title_block'); ?>
    Contacts our firm
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Strona kontaktów</h1>
   
    <form  action="<?php echo e(route('contact-submit')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Imię</label>
            <input type="text" name="name" placeholder="Enter name"id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email"id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Nazwa</label>
            <input type="text" name="subject" placeholder="Enter topic"id="topic" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Wiadomośó</label>
            <input type="text" name="message" placeholder="Enter message"id="topic" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Zdjęcie</label>
            <input type="file" name="photos[]" id="" placeholder="Plik" multiple>
            
            <input type="hidden" name="max_file_size" value="65536">
        </div>
        <button type="submit" class="btn btn-success">Nadeslać</button>
    </form>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\domains\laravel\laravel.mini\resources\views/contact.blade.php ENDPATH**/ ?>