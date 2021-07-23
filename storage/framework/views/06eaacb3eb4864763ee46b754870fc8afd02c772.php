<!-- Header section -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="/img/logo.png" alt="">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">

                <?php if(auth()->guard()->guest()): ?>
                    <a href="#" id="login-button" class="site-btn header-btn"><?php echo e(__("Acceder")); ?></a>
                    <?php echo $__env->make('partials.learning.modals.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <a href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                       class="site-btn header-btn"
                    >
                        <?php echo e(__("Salir")); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>

                <nav class="main-menu">
                    <ul>
                        <li><a href="<?php echo e(route('welcome')); ?>"><?php echo e(__("Inicio")); ?></a></li>
                        <li><a href="<?php echo e(route("courses.index")); ?>"><?php echo e(__("Cursos")); ?></a></li>
                        <li><a href="blog.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <?php if (\Illuminate\Support\Facades\Blade::check('teacher')): ?>
                            <li>
                                <a class="brand-text" href="<?php echo e(route('teacher.index')); ?>"><?php echo e(__("Profesor")); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li>
                                <a class="brand-text" href="<?php echo e(route('student.index')); ?>"><?php echo e(__("Estudiante")); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->

<?php $__env->startPush("js"); ?>
    <script>
        <?php if(session('error-login')): ?>
            $("#login-modal").modal();
        <?php endif; ?>
        jQuery("#login-button").on("click", function (e) {
            e.preventDefault();
            $("#login-modal").modal();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/navigation.blade.php ENDPATH**/ ?>