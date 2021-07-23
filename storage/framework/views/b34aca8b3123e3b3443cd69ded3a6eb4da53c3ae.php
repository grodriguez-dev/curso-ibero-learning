<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo e(env('APP_NAME')); ?></title>
        <meta charset="UTF-8">
        <meta name="description" content="WebUni Education Template">
        <meta name="keywords" content="webuni, education, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        <!-- Favicon -->
        <link href="/img/favicon.ico" rel="shortcut icon"/>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/css/owl.carousel.css"/>
        <link rel="stylesheet" href="/css/style.css"/>


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php echo $__env->yieldPushContent('css'); ?>
    </head>
    <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php echo $__env->make('partials.learning.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('hero'); ?>

    <?php $__env->startComponent('components.alert-component'); ?><?php if (isset($__componentOriginala3bd265eb1c5895f70e1366156f7b9fcc7936155)): ?>
<?php $component = $__componentOriginala3bd265eb1c5895f70e1366156f7b9fcc7936155; ?>
<?php unset($__componentOriginala3bd265eb1c5895f70e1366156f7b9fcc7936155); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('partials.learning.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--====== Javascripts & Jquery ======-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".toggle-wish").unbind().on("click", function (e) {
                const self = $(this);
                const route = $(this).data("route");
                jQuery.ajax({
                    method: "PUT",
                    url: route,
                    beforeSend: function () {
                        $.blockUI({
                            message: '<?php echo e(__("Procesando...")); ?>'
                        });
                    },
                    success: function () {
                        self.toggleClass("text-danger");
                    },
                    complete: function () {
                        $.unblockUI();
                    }
                });
            });
        });
    </script>

    <?php echo $__env->yieldPushContent('js'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\curso-ibero-learning\resources\views/layouts/learning.blade.php ENDPATH**/ ?>