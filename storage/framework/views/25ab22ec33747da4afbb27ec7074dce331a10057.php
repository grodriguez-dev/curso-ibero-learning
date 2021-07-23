<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2><?php echo e(__("Nuestras categorías de cursos")); ?></h2>
            <p><?php echo __("Aquí tienes todas las categorías de cursos de programación que manejamos en <span class='brand-text'>:app</span>", ['app' => env('APP_NAME')]); ?></p>
        </div>
        <div class="row">
            <!-- categorie -->
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <!-- category -->
                <div class="col-lg-4 col-md-6">

                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="<?php echo e($category->imagePath()); ?>"></div>
                        <div class="ci-text">
                            <h5><?php echo e($category->name); ?></h5>
                            <p><?php echo e($category->description); ?></p>
                            <span><?php echo e(__(":total cursos", ['total' => $category->courses_count])); ?></span>
                        </div>

                        <div class="course-author">
                            <a
                                class="site-btn btn-block"
                                href="<?php echo e(route("courses.category", ["category" => $category])); ?>"
                            >
                                <?php echo e(__("Ver cursos")); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <!-- ./category -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="container">
                    <div class="empty-results">
                        <?php echo e(__("Actualmente no tenemos nada, pero estamos trabajando duro para añadir nuevo contenido")); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- categories section end -->
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/categories.blade.php ENDPATH**/ ?>