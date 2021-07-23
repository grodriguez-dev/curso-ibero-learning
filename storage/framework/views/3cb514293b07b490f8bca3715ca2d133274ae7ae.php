<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-0">
            <h2><?php echo e(__("Cursos destacados")); ?></h2>
            <p><?php echo e(__("Aquí tienes los cursos destacados de la plataforma")); ?></p>
        </div>
    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all"><?php echo e(__("Todos")); ?></li>
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="control" data-filter=".<?php echo e($category->name); ?>">
                    <?php echo e($category->name); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="empty-results">
                    <?php echo __("No hay categorías disponibles"); ?>

                </div>
            <?php endif; ?>
        </ul>
        <div class="row course-items-area">
            <?php $__empty_1 = true; $__currentLoopData = $featuredCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make("partials.learning.courses.single", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="empty-results">
                    <?php echo __("No hay cursos destacados disponibles"); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- course section end -->
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/featured_courses.blade.php ENDPATH**/ ?>