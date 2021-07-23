<!-- search section -->
<section class="search-section">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2><?php echo e(__("Busca tu curso")); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <!-- search form -->
                    <form
                        class="course-search-form"
                        action="<?php echo e(route('courses.search')); ?>"
                        method="POST"
                    >
                        <?php echo csrf_field(); ?>
                        <input
                            type="text"
                            autocomplete="off"
                            value="<?php echo e(session('search[courses]')); ?>"
                            name="search"
                            placeholder="<?php echo e(__("¿Qué curso buscas?")); ?>"
                        />
                        <button type="submit" class="site-btn">
                            <?php echo e(__("Buscar cursos")); ?>

                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search section end -->
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/search.blade.php ENDPATH**/ ?>