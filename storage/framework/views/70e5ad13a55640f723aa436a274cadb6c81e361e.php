<?php $__env->startSection('bloggercontent'); ?>
<section class="home-slider js-fullheight owl-carousel" style="margin-top: -38px;">
	<div class="slider-item js-fullheight">
		<div class="container-fluid">
			<div class="row js-fullheight slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-6 text ftco-animate">
					<div class="author mb-4 d-flex align-items-center">
						<a href="#" class="img" style="background-image: url(<?php echo e(asset($user->user_details->profile)); ?>)"></a>
						<div class="ml-3 info">
							<span>User</span>
							<h3><a href="#"><?php echo e($user->name); ?></a>, <span><?php echo e($user->user_details->dob); ?></span></h3>
						</div>
					</div>
					<div class="text-2">
						<span class="big">Create</span>
						<h1 class="mb-4"><a href="#">Advice customer best comestics</a></h1>
						<p class="mb-4">Change customer most beautiful person</p>
						

					</div>
				</div>

				<div class="col-md-6 js-fullheight img" style="background-image: url(<?php echo e(asset($user->user_details->cover_photo)); ?>)"></div>
				
			</div>
		</div>
	</div>
</section>

<section class="ftco-intro">
	<div class="container">
		<div class="row justify-content-start mt-5">
			<div class="col-lg-2">

			</div>
			<div class="col-md-10 mb-5">
				<h4>You are <strong>Beauty</strong> &amp; <strong>Blogger</strong> Advice customer how should choose comestics,how can change beautiful person,how should keep your beauty.</h4>
			</div>
		</div>
	</div>
</section>

<div class="container mt-5">
	<div class="row">
		<div class="col-lg-4 d-lg-block d-md-none d-sm-none">
			<div class="row">
				<div class="col-lg-9">
					<h3 class="profic">Basic Info</h3><hr class="hor">
					<h4>Name <span><?php echo e($user->name); ?></span></h4>
					<h4>Date of Birth <span><?php echo e($user->user_details->dob); ?></span></h4>
					<h4>Address <span><?php echo e($user->user_details->address); ?></span></h4>
					<h4>Phone <span><?php echo e($user->user_details->phone); ?></span></h4>
					
				</div>
				</div>
			<div class="row">
				<div class="col-lg-9">
					<h3 class="profic">Edit Profile</h3><hr class="hor">
					<img src="<?php echo e(asset($user->user_details->profile)); ?>" class="coverphoto">
				</div>
				
			</div>
			<div class="row mt-4">
				<div class="col-lg-9">
					<h3 class="profic">Edit Cover Photo</h3><hr class="hor">
					<img src="<?php echo e(asset($user->user_details->cover_photo)); ?>" class="coverphoto">
				</div>
				
			</div>
			
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 d-block">
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                   <img src="<?php echo e(asset($row->user->user_details->profile)); ?>" class="img-fluid blogger_img">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                	<h4><?php echo e($row->user->name); ?></h4>

                    <p><?php echo $row->post_content; ?></p>
                </div>
                    <?php
                    $photo=json_decode($row->photo);
                    ?>
                    <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
                    <img src="<?php echo e(asset($photos)); ?>" class="img-fluid post-img">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-3 ml-lg-5 mt-3">
                   <span style="font-size: 15px;color: #08086f;" class="icon icon-heart-o"><button class="like_<?php echo e($row->id); ?> likeBtn" data-postid="<?php echo e($row->id); ?>">&nbsp;Likes&nbsp;</button></span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
                    <a href="<?php echo e(route('post.show', $row->id)); ?>"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comment&nbsp;</a>                         
                    </span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
                    <a href="<?php echo e(route('userpost.store', $row->id)); ?>">
                        <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;&nbsp;Saves</span>
                    </a>
                </div>

            </div>
        </div>

                
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
		<div class="col-lg-2 d-lg-block d-md-none d-sm-none">

		</div>
	</div>

</div>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
		$(document).ready(function(){

				$('.likeBtn').on('click',function(){
				//var like_s = $(this).attr('data-like');
		
					var post_id = $(this).data('postid');
					// alert(post_id);
					 $.ajaxSetup({
					 	headers: {
					 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					 	}
					 });
					 $.ajax({
					 	url:"<?php echo e(route('like','post_id')); ?>",
					 	method:'GET',
					 	data:{post_id: post_id},
					 	success:function(data)
					 	{
					 		//var dd=$.parseJSON(data);
					 		var dd=JSON.parse(data);
					 		//console.log(dd['is_like']);
					 		//console.log(dd['likes']);
					 		//console.log(post_id);
					 		if(post_id == dd['likes']){
					 			if(dd['is_like'] ==1){
					 			$('.like_'+post_id).html("Unlikes");
					 			}
					 			else{
					 				$('.like_'+post_id).html("Likes");
					 			}
					 		}
					 	}
					 });	

			});
		});
	</script>
	<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.masterblog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/profile.blade.php ENDPATH**/ ?>