<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Admin Dashboard| Login</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/login-4.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" />
</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('<?php echo e(asset('assets/media/bg/bg-3.jpg')); ?>');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <div class="d-flex flex-center mb-15" style="margin-bottom: 0rem !important;">
                        <a href="#">
                            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" class="max-h-175px" alt="" />
                        </a>
                    </div>
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Welcome</h3>
                            <div class="text-muted font-weight-bold">Dashboard Admin</div>
                        </div>
                        <?php echo $__env->make('alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('admin.login.submit')); ?>" method="post" class="form">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text"
                                    placeholder="Username" name="username" autocomplete="off" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password"
                                    placeholder="Password" name="password" />
                            </div>
                            
                    </div>
                    <div class="form-group mb-5">
                        <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 "
                            style="width: 100%;">Sign In</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/custom/login/login-general.js')); ?>"></script>




</body>

</html>
<?php /**PATH C:\xampp\htdocs\kurasi\resources\views/login.blade.php ENDPATH**/ ?>