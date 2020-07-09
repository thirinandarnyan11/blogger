<?php $__env->startSection('usercontent'); ?>
<div class="container post">
    <div class="row">
        <div class="col-lg-3 d-lg-block d-md-none d-sm-none">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-block">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="<?php echo e($row->post->user->user_details->profile); ?>" class="img-fluid blogger_img">

                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                    <h4><?php echo e($row->post->user->name); ?></h4>

                    <p><?php echo $row->post->post_content; ?></p>
                </div>
                    <?php
                    $photo=json_decode($row->post->photo);
                    ?>
                    <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
                    <img src="<?php echo e(asset($photos)); ?>" class="img-fluid post-img">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 ml-lg-5 mt-3">
                    <span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;&nbsp;Likes</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2 mt-3">
                    <a href="<?php echo e(route('post.show', $row->post->user->id)); ?>"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comment&nbsp;</span></a>                         
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-2 mt-3">
                    <a href="<?php echo e(route('userpost.store', $row->id)); ?>">
                        <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;&nbsp;Saves</span>
                    </a>
                </div>

            </div>
        </div>

                
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
        <div class="col-lg-3 d-lg-block d-md-none d-sm-none">
        </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/savedpost.blade.php ENDPATH**/ ?>