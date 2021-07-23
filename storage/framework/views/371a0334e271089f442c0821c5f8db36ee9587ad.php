<?php if($errors->any()): ?>
    <div class="form-errors">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/form_errors.blade.php ENDPATH**/ ?>