<?php $__env->startSection('title', 'Organization'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
	
   <div class="col-md-12 text-right">
   	<button class="btn btn-primary" onclick="add_organization()">Add New</button>
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
   			<th>Name</th>
   			<th>Category</th>
   			<th>Trade-License</th>
   			<th>Logo</th>
   			<th>Licensed Date</th>
   			
            <th>Action</th>
   		</tr>
   		<tr>
   			<?php if($organization): ?>
   			<?php $i=0; ?>
   			<?php $__currentLoopData = $organization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   			<?php $i++; ?>
   			<tr>
   				<td><?php echo e($i); ?></td>
   				<td>
   					<?php echo e($row->name); ?>

   				</td>
   				
   				<td><?php echo e($row->category); ?></td>
   				<td><?php echo e($row->trade_license); ?></td>
               <td>
                  <?php if($row->logo): ?>
                  <img src="<?php echo e(asset('storage/'.$row->logo)); ?>" width="80" height="70" />
                  <?php else: ?>
                  <img src="<?php echo e(asset('storage/organization/organization.jpeg')); ?>" width="80" height="70" />
                  <?php endif; ?></td>
   				<td><?php echo e($row->licensed_date); ?></td>
   				
   				<td><a href="javascript:void(0)" onclick="editOrganization('<?php echo encrypt($row->id); ?>')"  class="btn btn-info"><i class="fas fa-edit"></i></a>|<a   onclick="deleteOrganization('<?php echo encrypt($row->id); ?>')" class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fas fa-trash-alt"></i> </a></td>
   			</tr>
   			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   			<?php endif; ?>
   		</tr>
   	</table>
   </div>

 </div>
</div>


<script type="text/javascript">
	function add_organization(){
		window.location.href = "<?php echo e(url('admin/create-organization')); ?>";
	}

	function editOrganization(organizationId){
		
		window.location.href = "<?php echo e(url('admin/edit-organization')); ?>"+'/'+organizationId;
	}

    function deleteOrganization(organizationId){
      
      window.location.href = "<?php echo e(url('admin/delete-organization')); ?>"+'/'+organizationId;
   }


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/l-test/resources/views/organization/index.blade.php ENDPATH**/ ?>