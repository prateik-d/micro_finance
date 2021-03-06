<?php if((Session::get('admin_name')) != 'admin'): ?>
    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/dist/css/style.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
        <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

          
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <a href="index3.html" class="brand-link">
                        <img src="<?php echo e(URL::to('/')); ?>/public/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">AdminLTE 3</span>
                    </a>
                    <div class="sidebar">
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item">
                                    <a href="<?php echo e(URL::to('/')); ?>/admin/dashboard" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(URL::to('/')); ?>/admin/users" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="table.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Table</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i>
                            <label>Hello <?php echo e(Session::get('admin_name')); ?>,</label>
                            <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                            <a href="<?php echo e(url('/admin/user-profile')); ?>" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> User Profile
                                <!-- <span class="float-right text-muted text-sm">12 hours</span> -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo e(url('/admin/reset-password')); ?>" class="dropdown-item">
                                <i class="fas fa-recycle mr-2"></i> Reset Password
                                <!-- <span class="float-right text-muted text-sm">2 days</span> -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo e(url('/admin/logout')); ?>" class="dropdown-item dropdown-footer">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
<?php else: ?>
    <script>
        // your "Imaginary javascript"
         window.location.href = '<?php echo e(url("admin")); ?>';
    </script>
<?php endif; ?>
<?php /**PATH /var/www/html/micro_finance/resources/views/admin/header.blade.php ENDPATH**/ ?>