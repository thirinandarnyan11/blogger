<?php $__env->startSection('bloggercontent'); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-12 col-sm-12 d-block">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="<?php echo e(asset('frontendtemplate/usertemplate/images/staff-2.jpg')); ?>" class="img-fluid blogger_img">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                    <p><?php echo e($row->post_content); ?></p>
                </div>
                    <?php
                    $photo=json_decode($row->photo);
                    ?>
                    <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <img src="<?php echo e(asset($photos)); ?>" class="img-fluid post-img">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
                    <span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
                    <span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;                        <a href="<?php echo e(route('post.show', $row->id)); ?>" class="btn btn-primary">Comment</a>
                    </span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
                    <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.masterblog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/post/index.blade.php ENDPATH**/ ?>