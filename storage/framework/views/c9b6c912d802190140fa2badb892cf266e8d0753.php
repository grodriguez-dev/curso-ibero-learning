<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel"><?php echo e(__("Accede con tu cuenta")); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if(session('error-login')): ?>
                    <div class="form-errors">
                        <p><?php echo e(session('error-login')); ?></p>
                    </div>
                <?php endif; ?>
                <!-- login form -->
                <form class="signup-form" action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input
                        type="text"
                        name="email"
                        value="<?php echo e(old('email')); ?>"
                        placeholder="<?php echo e(__("Correo electrónico")); ?>"
                    />
                    <input
                        type="password"
                        name="password"
                        placeholder="<?php echo e(__("Contraseña")); ?>"
                    />
                    <button
                        type="submit"
                        class="site-btn btn-block"
                    >
                        <?php echo e(__("Iniciar sesión")); ?>

                    </button>
                </form>
                <!-- ./login form -->
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/modals/login.blade.php ENDPATH**/ ?>