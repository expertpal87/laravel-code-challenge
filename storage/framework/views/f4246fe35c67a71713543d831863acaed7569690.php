<?php $__env->startSection('title', 'Edit Organization'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row container">


<div class="col-md-1"></div>
<div class="col-md-9">

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
 <div class="alert alert-success">
<ul>
           
                <li><?php echo e(session('success')); ?></li>
           
        </ul>
 </div>
<?php endif; ?>

<form action="<?php echo e(url('admin/update-organization')); ?>" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<input type="hidden" name="organizationId" value="<?php echo e(encrypt($organization->id)); ?>">
	<div class="form-group">
	 <label>Name</label>	
		<input type="text" class="form-control" value="<?php if($organization->name): ?> <?php echo e($organization->name); ?> <?php endif; ?>" name="name" placeholder="Enter Name">
	</div>

	<div class="form-group">
		 <label>Category</label>	
		<select class="form-control" name="category">
			<option value="" selected="">--please choose Category--</option>
			<option <?php if($organization->category == 'cat1'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="cat1">cat1</option>
			<option <?php if($organization->category == 'cat2'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="cat2">cat2</option>
			<option <?php if($organization->category == 'cat3'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="cat3">cat3</option>
			<option <?php if($organization->category == 'cat4'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="cat4">cat4</option>
		</select>
	</div>

	<div class="form-group">
	 <label>trade_license</label>	
		<input type="text" class="form-control" value="<?php if($organization->trade_license): ?> <?php echo e($organization->trade_license); ?> <?php endif; ?>" name="trade_license" placeholder="Enter Trade License">
	</div>


	<!-- <div class="form-group">
	 <label>Licensed Date</label>	
		<input type="date" class="form-control" value="<?php if($organization->licensed_date): ?> <?php echo e($organization->licensed_date); ?> <?php endif; ?>" name="licensed_date" placeholder="Enter Licensed Date">
	</div> -->

	<div class="row">
		<div class="col-md-6">
			<?php if($organization->logo): ?>
			<img src="<?php echo e(asset('storage/'.$organization->logo)); ?>" width="200px" height="200px" />
		
			<?php else: ?>
		<img src="<?php echo e(asset('storage/organization/organization.jpeg')); ?>" width="200px" height="200px" />
			<?php endif; ?>
			
		</div>
	</div>


	<div class="form-group">
	<label>Logo</label>	
	<input type="file" class="form-control" name="logo">
	</div>
	
	
	<div class="form-group">
	<input type="submit" class="btn btn-success" />
	<a href="<?php echo e(url('admin/organization')); ?>" class="btn btn-danger">Back</a>
	</div>

</form>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/l-test/resources/views/organization/edit.blade.php ENDPATH**/ ?>