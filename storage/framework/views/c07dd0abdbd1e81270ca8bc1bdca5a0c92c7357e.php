<?php if(!session('error-login')): ?>
    <?php echo $__env->make('partials.form_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<form class="intro-newslatter text-center" action="<?php echo e(route('register')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="role" value="<?php echo e(\App\Models\User::STUDENT); ?>" />

    <div class="row justify-content-center">
        <div class="col-12 mb-3">
            <input
                type="text"
                name="name"
                value="<?php echo e(old('name')); ?>"
                placeholder="<?php echo e(__("Nombre")); ?>"
            />
            <input
                type="text"
                name="email"
                class="last-s"
                value="<?php echo e(old('email')); ?>"
                placeholder="<?php echo e(__("Correo electrónico")); ?>"
            />
        </div>
        <div class="col-12">
            <input
                type="password"
                name="password"
                placeholder="<?php echo e(__("Contraseña")); ?>"
            />
            <input
                type="password"
                name="password_confirmation"
                class="last-s"
                placeholder="<?php echo e(__("Confirma la contraseña")); ?>"
            />
        </div>
        <div class="col-lg-12 mt-3">
            <button type="submit" class="site-btn"><?php echo e(__("Crear cuenta")); ?></button>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/signup_customer.blade.php ENDPATH**/ ?>