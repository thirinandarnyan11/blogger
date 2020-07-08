<?php $__env->startSection('content'); ?>
	<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Accepted user's detail</h1>
         
        </div>
        <div class="col-lg-1">
          <a href="<?php echo e(route('bloggerlist.index')); ?>"><button class="btn btn-outline-dark"><i class="fas fa-angle-double-left"></i></button></a>
        </div>
    </div>
        <div class="card">
        	<div class="card-header">
        		<h4 style="color:blue;">Accept User's Detail Form</h4>
        	</div>
        	<div class="card-body">
        		<?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">
                        X
                      </button>
                      <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                    </div>
                <?php endif; ?>
                <?php if($message=Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                      
                <?php endif; ?>
                <div class="container">
                    <div class="row">
                        <form method="post" action="<?php echo e(url('sendemail/send',$user->id)); ?>">
                    <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($user->name); ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="<?php echo e($user->email); ?>">
                            </div>
                              
                            <!-- <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                            </div>
                             -->  
                            <div class="form-group">
                                <input type="submit" name="send" value="Send" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
        	</div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/backend/bloggerdetail.blade.php ENDPATH**/ ?>