<?php $__env->startSection('title', 'Contact'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
	
   <div class="col-md-12 text-right">
   	<button class="btn btn-primary" onclick="add_contact()">Add New</button>
   </div>
   <div class="col-md-12 mt-3">
      <?php if(session('success')): ?>
       <div class="alert alert-success">
      <ul>
                 
                      <li><?php echo e(session('success')); ?></li>
                 
              </ul>
       </div>
      <?php endif; ?>
   	<table class="table mt-3">
   		<tr>
   			<th>S.No</th>
   			<th>First-Name</th>
   			<th>Last-Name</th>
   			<th>Email</th>
   			<th>Mobile-Number</th>
   			<th>Organization</th>
   			<th>Is Email Verified</th>
            <th>Action</th>
   		</tr>
   		<tr>
   			<?php if($contact): ?>
   			<?php $i=0; ?>
   			<?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   			<?php $i++; ?>
   			<tr>
   				<td><?php echo e($i); ?></td>
   				<td>
   					<?php echo e($row->fname); ?>

   				</td>
   				<td><?php echo e($row->lname); ?></td>
   				<td><?php echo e($row->email); ?></td>
   				<td><?php echo e($row->mobile); ?></td>
   				<td><?php echo e($row->organization_id); ?></td>
   				<td><?php if($row->email_varified !=1): ?> <?php echo e('No'); ?>  <?php else: ?> <?php echo e('Yes'); ?>  <?php endif; ?></td>
   				<td><a href="javascript:void(0)" onclick="editContact('<?php echo encrypt($row->id); ?>')"  class="btn btn-info"><i class="fas fa-edit"></i></a>|<a   onclick="deleteContact('<?php echo encrypt($row->id); ?>')" class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fas fa-trash-alt"></i> </a></td>
   			</tr>
   			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   			<?php endif; ?>
   		</tr>
   	</table>
   </div>

 </div>
</div>


<script type="text/javascript">
	function add_contact(){
		window.location.href = "<?php echo e(url('admin/create-contact')); ?>";
	}

	function editContact(contactId){
		
		window.location.href = "<?php echo e(url('admin/edit-contact')); ?>"+'/'+contactId;
	}

   function deleteContact(contactId){
      
      window.location.href = "<?php echo e(url('admin/delete-contact')); ?>"+'/'+contactId;
   }


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Babita\Desktop\PhpBox\laravel-code-challenge\resources\views/contact/index.blade.php ENDPATH**/ ?>