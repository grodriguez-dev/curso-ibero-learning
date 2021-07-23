<!-- course -->
<div class="mix col-lg-3 col-md-4 col-sm-6 <?php $__currentLoopData = $course->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($category->name); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
    <div class="course-item">
        <div class="course-thumb set-bg" data-setbg="<?php echo e($course->imagePath()); ?>">
            <div class="price"><?php echo e(__("Precio :price €", ["price" => $course->price])); ?></div>
        </div>

        <?php if(auth()->guard()->check()): ?>
            <div class="wish-heart">
                <?php if($course->wishedForUser()): ?>
                    <i
                        class="fa fa-2x fa-heart-o text-danger toggle-wish"
                        data-route="<?php echo e(route("student.wishlist.toggle", ["course" => $course])); ?>"
                    ></i>
                <?php else: ?>
                    <i
                        class="fa fa-2x fa-heart-o toggle-wish"
                        data-route="<?php echo e(route("student.wishlist.toggle", ["course" => $course])); ?>"
                    ></i>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="course-info">
            <div class="course-text">
                <h5><?php echo e($course->title); ?></h5>
                <div class="students"><?php echo e(__(":count Estudiantes", ['count' => $course->students_count])); ?></div>
            </div>
            <div class="course-author">
                <div class="ca-pic set-bg" data-setbg="/img/authors/1.jpg"></div>
                <p><?php echo e($course->teacher->name); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- course end -->
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/courses/single.blade.php ENDPATH**/ ?>