<?php $__env->startSection('content'); ?>
	<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Create Category</h1>
          <p class="text-muted">Category table have name columns.</p>
        </div>
        <div class="col-lg-1">
          <a href="<?php echo e(route('categories.index')); ?>"><button class="btn btn-outline-dark"><i class="fas fa-angle-double-left"></i></button></a>
        </div>
    </div>
        <div class="card">
        	<div class="card-header">
        		<h4 style="color:blue;">Create New Category Form</h4>
        	</div>
        	<div class="card-body">
        		<?php if($errors->any()): ?>
        		<div class="alert alert-danger">
        			<ul>
        				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        				<li> <?php echo e($error); ?></li>
        				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        			</ul>
        		</div>
        		<?php endif; ?>
        		<form action="<?php echo e(route('categories.store')); ?>" method="POST" enctype="multipart/form-data">
        			<?php echo csrf_field(); ?>
        			<div class="form-group row">
		        		<label for="categoryName" class="col-sm-2 col-form-label">Name</label>
		        		<div class="col-sm-10">
		        			<input type="text" class="form-control" id="categoryName" placeholder="Enter Category Name" name="name">
		        			
		        		</div>
		        	</div>

		        	
		        	<div class="form-group row">
		        		<div class="col-sm-2"></div>
		        		<div class="col-sm-10">
		        			<button type="submit" class="btn btn-primary">
		        				<i class="fa fa-save"></i> Save
		        			</button>
		        		</div>
		        	</div>
		        </form>

        	</div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/backend/categories/create.blade.php ENDPATH**/ ?>