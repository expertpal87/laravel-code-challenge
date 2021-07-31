<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 3 | Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-free/css/all.min.css')); ?>">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/adminlte.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.css')); ?>">
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">                   
                     <div class="dropdown-divider"></div>
                     <div class="dropdown-divider"></div>
                     <a href="<?php echo e(url('admin/logout')); ?>" class="dropdown-item">
                     <i class="fas fa-file mr-2"></i> Logout
                     </a>
                  </div>
               </li>
            </ul>
         </nav>
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link">
            <img src="<?php echo e(asset('admin/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
            </a>
            <div class="sidebar">
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="<?php echo e(asset('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block"> <?php echo e(session::get('name')); ?> </a>
                  </div>
               </div>
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                        <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link ">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p> Dashboard</p>
                        </a>
                     </li>
                       <li class="nav-item">
                        <a href="<?php echo e(url('admin/contact')); ?>" class="nav-link ">
                          <i class="far fa-address-book"></i>
                           <p> Contact</p>
                        </a>
                     </li>
                       <li class="nav-item">
                        <a href="<?php echo e(url('admin/organization')); ?>" class="nav-link ">
                          <i class="fas fa-certificate"></i>
                           <p> Organization</p>
                        </a>
                     </li>              
                     </li>
                  </ul>
               </nav>
            </div>
         </aside>
        <div class="content-wrapper">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?php echo $__env->yieldContent('title'); ?></h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Home</a></li>
                           <li class="breadcrumb-item active"><?php echo $__env->yieldContent('title'); ?></li>
                        </ol>
                     </div>
                  </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
         </div>
         <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Version</b> 3.0.5
            </div>
         </footer>
         <aside class="control-sidebar control-sidebar-dark">
          </aside>
       </div>
      <script src="<?php echo e(asset('custom.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/chart.js/Chart.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/sparklines/sparkline.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/moment/moment.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.min.js')); ?>"></script>

      <script src="<?php echo e(asset('admin/dist/js/adminlte.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/dist/js/pages/dashboard.js')); ?>"></script>
      <script src="<?php echo e(asset('admin/dist/js/demo.js')); ?>"></script>
      <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
   </body>
</html><?php /**PATH /opt/lampp/htdocs/l-test/resources/views/layouts/admin/app.blade.php ENDPATH**/ ?>