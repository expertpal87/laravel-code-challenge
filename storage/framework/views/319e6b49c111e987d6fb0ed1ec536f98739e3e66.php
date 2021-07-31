<?php $__env->startSection('title', 'dashboard'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
      <div class="container-fluid">

 <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php if($totalContact): ?> <?php echo e($totalContact); ?> <?php else: ?> <?php echo e('0'); ?> <?php endif; ?></h3>

                <p>Contact</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(url('admin/contact')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php if($totalOrganization): ?> <?php echo e($totalOrganization); ?>  <?php else: ?> <?php echo e('0'); ?> <?php endif; ?></h3>

                <p>Organization</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo e(url('admin/organization')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
       
        </div>
        <!-- /.row -->

</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Babita\Desktop\PhpBox\laravel-code-challenge\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>