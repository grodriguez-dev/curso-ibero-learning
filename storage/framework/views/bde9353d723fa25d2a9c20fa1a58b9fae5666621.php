<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="/img/bg.jpg">
    <div class="container">
        <div class="hero-text text-white">
            <h2><?php echo e(__("Los mejores cursos de programación Online")); ?></h2>
            <p>
                <?php echo __("En <span class='brand-text'>:app</span> podrás evolucionar rápido con la ayuda de los mayores expertos", [
                    'app' => env('APP_NAME')
                ]); ?>

            </p>
        </div>

        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->make('partials.learning.signup_customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <h2 class="welcome text-center">
                <?php echo e(__("¿Qué te apetece ver hoy :user?", ['user' => auth()->user()->name])); ?>

            </h2>
        <?php endif; ?>
    </div>
</section>
<!-- Hero section end -->
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/hero.blade.php ENDPATH**/ ?>