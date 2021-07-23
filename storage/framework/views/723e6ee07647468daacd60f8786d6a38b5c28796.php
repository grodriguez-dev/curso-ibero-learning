<!-- signup section -->
<section class="signup-section spad">
    <div class="signup-bg set-bg" data-setbg="/img/signup-bg.jpg"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="signup-warp">
                    <div class="section-title text-white text-left">
                        <h2><?php echo e(__("¿Quieres ser instructor en :app?", ["app" => env('APP_NAME')])); ?></h2>
                        <p><?php echo e(__("Rellena el siguiente formulario y daremos de alta tu perfil de instructor en la plataforma para que puedas empezar a crear tus cursos")); ?></p>
                    </div>
                    <!-- signup teacher form -->
                    <form
                        autocomplete="off"
                        id="teacher-form"
                        class="signup-form"
                        action="<?php echo e(route('register')); ?>"
                        method="POST"
                    >
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="role" value="<?php echo e(\App\Models\User::TEACHER); ?>" />
                        <input
                            autocomplete="off"
                            name="name"
                            value="<?php echo e(old("name")); ?>"
                            type="text"
                            placeholder="<?php echo e(__("Nombre")); ?>"
                        />
                        <input
                            autocomplete="off"
                            name="email"
                            value="<?php echo e(old("email")); ?>"
                            type="text"
                            placeholder="<?php echo e(__("Correo electrónico")); ?>"
                        />
                        <input
                            autocomplete="off"
                            name="password"
                            type="password"
                            placeholder="<?php echo e(__("Contraseña")); ?>"
                        />
                        <input
                            autocomplete="off"
                            name="password_confirmation"
                            type="password"
                            placeholder="<?php echo e(__("Confirma tu contraseña")); ?>"
                        />
                        <button class="site-btn"><?php echo e(__("Crear cuenta de instructor")); ?></button>
                    </form>

                    <div id="success-teacher-signup" class="section-title text-white text-left">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section end -->

<?php $__env->startPush("js"); ?>
<script>
    jQuery(document).ready(function () {
        $("#teacher-form").on("click", function (e) {
            e.preventDefault();

            const fields = ['name', 'email', 'password', 'password_confirmation'];
            fields.map(field => jQuery(`#teacher-form input[name=${field}]`)
                .removeClass('field-is-invalid'));

            jQuery.ajax({
                method: "POST",
                url: "<?php echo e(route('register')); ?>",
                data: $(this).serialize(),
                success: function (data) {
                    const message = data.message;
                    $("#success-teacher-signup").show().html(`<p>${message}</p>`);
                    setTimeout(() => {
                        window.location.href = '/';
                    }, 3000);
                },
                error: function (error) {
                    const teacherForm = jQuery("#teacher-form");
                    const errors = JSON.parse(error.responseText);
                    if (errors.hasOwnProperty('errors')) {
                        for (let error in errors.errors) {
                            teacherForm
                                .find(`input[name=${error}]`)
                                .addClass('field-is-invalid');
                            if (error === 'password') {
                                teacherForm
                                    .find(`input[name=password_confirmation]`)
                                    .addClass('field-is-invalid');
                            }
                        }
                    }
                }
            });
        })
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/partials/learning/signup_teacher.blade.php ENDPATH**/ ?>