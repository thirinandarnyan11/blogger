<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Category List</h1>
        </div>
        <div class="col-lg-1">
          <a href="<?php echo e(route('categories.create')); ?>"><button class="btn btn-outline-dark"><i class="fas fa-plus"></i></button></a>
        </div>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<th>No</th>
		<th>Name</th>
		<th>Action</th>

	</thead>
	<tbody >
		<?php $i=1; ?>

		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($i++); ?></td>
			<td><?php echo e($row->name); ?></td>
			<td><a href="<?php echo e(route('categories.edit',$row->id)); ?>" class="btn btn-warning" style="display: inline;">Edit </a>
			<form method="POST" action="<?php echo e(route('categories.destroy',$row->id)); ?>" onsubmit="return confirm('Are you sure?')">
				<?php echo csrf_field(); ?>
				<?php echo method_field('DELETE'); ?>
				<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
			</form>
		</td>

		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	<tfoot>
		<th>No</th>
		<th>Name</th>
		<th>Action</th>

	</tfoot>
</table>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('backendtemplate/js/demo/datatables-demo.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/backend/categories/index.blade.php ENDPATH**/ ?>