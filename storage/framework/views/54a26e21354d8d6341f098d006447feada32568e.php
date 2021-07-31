<?php $__env->startSection('title', 'Edit Contact'); ?>
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


<form action="<?php echo e(url('admin/update-contact')); ?>" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<input type="hidden" name="contactId" value="<?php echo e(encrypt($contact->id)); ?>">
	<div class="form-group">
	 <label>First-Name</label>	
		<input type="text" class="form-control" value="<?php if($contact->fname): ?> <?php echo e($contact->fname); ?> <?php endif; ?>" name="first_name" placeholder="Enter First-Name">
	</div>

	<div class="form-group">
	 <label>Last-Name</label>	
		<input type="text" class="form-control" value="<?php if($contact->lname): ?> <?php echo e($contact->lname); ?> <?php endif; ?>" name="last_name" placeholder="Enter Last-Name">
	</div>

	<div class="form-group">
	 <label>Email</label>	
		<input type="text" readonly="" class="form-control" value="<?php if($contact->email): ?> <?php echo e($contact->email); ?> <?php endif; ?>" name="email" placeholder="Enter Email">
	</div>

	<div class="form-group">
	 <label>Mobile</label>	
	 <?php $mobiles = explode(',', $contact->mobile);  ?>
	 <?php $__currentLoopData = $mobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" class="form-control" value="<?php if($contact->mobile): ?> <?php echo e($mobile); ?> <?php endif; ?>" name="mobile[]" placeholder="Enter Mobile"><br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</div>

	<!-- <div class="form-group">
	 <label>Date of birth</label>	
		<input type="date" id="dob" class="form-control" value="<?php if($contact->dob): ?> <?php echo e($contact->dob); ?> <?php endif; ?>" name="dob" placeholder="Enter Date of birth">
	</div> -->
	
	<div class="form-group">
		 <label>Organization</label>	
		<select class="form-control" name="organization">
			<option value="" selected="">--please choose organization--</option>

			<?php if($organization): ?>
			<?php $__currentLoopData = $organization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option <?php if($contact->organization_id == $data->name): ?> <?php echo e('selected'); ?> <?php endif; ?>  value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>
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
	$( document ).ready(function() {
		alert('vias')
		var dob = $('#dob').val();
		if(dob == ""){
			$('#dob').attr('type','date');
		}
	});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/l-test/resources/views/contact/edit.blade.php ENDPATH**/ ?>