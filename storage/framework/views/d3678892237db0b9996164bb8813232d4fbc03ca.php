<?php if(session('message')): ?>
    <div class="row justify-content-center mt-3 mb-0 pb-0">
        <div class="col-md-10">
            <div class="alert alert-<?php echo e(session('message')[0]); ?>">
                <h4 class="alert-heading"><?php echo e(__("Mensaje informativo")); ?></h4>
                <p><?php echo e(session('message')[1]); ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/components/alert-component.blade.php ENDPATH**/ ?>