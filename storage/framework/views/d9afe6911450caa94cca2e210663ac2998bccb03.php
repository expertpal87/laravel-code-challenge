<?php $__env->startSection('title', 'Create Contact'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row container">
	

<div class="col-md-1"></div>
<div class="col-md-8">

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


<form action="<?php echo e(url('admin/store-contact')); ?>" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<div class="form-group">
	 <label>First Name</label>	
		<input type="text" class="form-control" value="<?php echo e(old('first_name')); ?>" name="first_name" placeholder="Enter Firstname">
	</div>

	<div class="form-group">
	 <label>Last-Name</label>	
		<input type="text" class="form-control" value="<?php echo e(old('last_name')); ?>" name="last_name" placeholder="Enter Lastname">
	</div>

	<div class="form-group">
	 <label>Email</label>	
		<input type="text" class="form-control" value="<?php echo e(old('email')); ?>" name="email" placeholder="Enter email">
	</div>

	<div class="form-group" id="mobile_lable">
	 <label>Mobile</label>	
	 <div class="row" >
	 	<div class="col-md-11">
		<input type="text" class="form-control"  name="mobile[]"  placeholder="Enter mobile" />
	</div>
	<div class="col-md-1">
		<a href="javascript:void(0)" onclick="addNewMoreMobileNumber()" class="btn btn-danger">+</a>
	</div>
</div>
	</div>

	<div class="form-group">
	 <label>Date of birth</label>	
		<input type="date" class="form-control" value="<?php echo e(old('dob')); ?>" name="dob" placeholder="Enter Date of birth">
	</div>

	
	<div class="form-group">
		 <label>Organization</label>	
		<select class="form-control" name="organization">
			<option value="" selected="">--please choose Organization--</option>

			<?php if($organization): ?>
			<?php $__currentLoopData = $organization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>

			
		</select>
	</div>
	
	<div class="form-group">
	<input type="submit" class="btn btn-success" />
	<a href="<?php echo e(url('admin/contact')); ?>" class="btn btn-danger">Back</a>
	</div>

</form>
</div>
</div>
</div>

<script type="text/javascript">
	function addNewMoreMobileNumber(){
		$('#mobile_lable').append('<br><div class="form-group" id="mobile_lable"><input type="text" class="form-control"  name="mobile[]"placeholder="Enter mobile" /></div>');
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/l-test/resources/views/contact/add.blade.php ENDPATH**/ ?>