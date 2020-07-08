<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Blogger List</h1>
        </div>
        
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>DOB</th>
		<th>Action</th>

	</thead>
	<tbody >
		<?php $i=1; ?>

		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<tr>
			<td><?php echo e($i++); ?></td>
			<td><?php echo e($row->name); ?></td>
			<td><?php echo e($row->email); ?></td>
			<td><?php echo e($row->user_details->phone); ?></td>
			<td><?php echo e($row->user_details->address); ?></td>
			<td><?php echo e($row->user_details->dob); ?></td>

			<td><a href="<?php echo e(route('bloggerlist.show',$row->id)); ?>" class="btn btn-primary" style="display: inline;"><i class="fas fa-user-check"></i> </a>

			<form method="POST" action="<?php echo e(route('bloggerlist.destroy',$row->id)); ?>" onsubmit="return confirm('Are you sure denied this blogger?')">
				<?php echo csrf_field(); ?>
				<?php echo method_field('DELETE'); ?>
				<button type="submit" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
			</form>

		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</tbody>
	<tfoot>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>DOB</th>
		<th>Action</th>

	</tfoot>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('backendtemplate/js/demo/datatables-demo.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/backend/bloggerlist.blade.php ENDPATH**/ ?>