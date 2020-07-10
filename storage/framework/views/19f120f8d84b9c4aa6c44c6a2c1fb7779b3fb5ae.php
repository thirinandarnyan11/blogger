<?php $__env->startSection('usercontent'); ?>
	<div class="col-lg-3 d-lg-block d-md-none d-sm-none">
	<!-- <div class="row" id="showdata"> -->
		<div class="col-lg-4 d-lg-block d-md-none d-sm-none">
			<div class="popular">
				<h3 class="">Popular Blogger</h3>
				<section class="comments_section mt-4">
					<ul class="comment_list">
						<li>
							<div class="comment_card" data-depth="0">
								<figure class="figure">
									<figcaption class="fig_caption" id="showdata">
										<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<h1><?php echo e($user->name); ?></h1>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul> 
				</section>
			</div>
		</div>
		<!-- </div> -->
	</div>
	<div class="col-lg-5 col-md-12 col-sm-12 d-block" style="margin-top:40px;">
		<?php if($message=Session::get('save')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                      
                <?php endif; ?>

		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card shadow-lg p-3 mb-5 bg-white rounded">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="<?php echo e(route('profile',$row->user->id)); ?>"><img src="<?php echo e($row->user->user_details->profile); ?>" class="img-fluid blogger_img"></a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
					<a href="<?php echo e(route('profile',$row->user->id)); ?>">
                        <h4><?php echo e($row->user->name); ?></h4></a>
					<p><?php echo $row->post_content; ?></p>
				</div>
				<?php
				$photo=json_decode($row->photo);
				?>
				<?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-6 col-lg-6 col-sm-6 mt-5 s">
						<img src="<?php echo e(asset($photos)); ?>" class="img-fluid post-img">
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-3 col-sm-3 ml-lg-5 mt-3">
					
					<span style="font-size: 15px;color: #08086f;" class="icon icon-heart-o"><button class="like_<?php echo e($row->id); ?> likeBtn" data-postid="<?php echo e($row->id); ?>">&nbsp;Likes&nbsp;</button></span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
					<a href="<?php echo e(route('post.show', $row->id)); ?>"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comments&nbsp;</span></a>                         
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
					<a href="<?php echo e(route('userpost.store', $row->id)); ?>">
                    	<span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;Saves&nbsp;</span>
                    </a>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div class="col-lg-4 d-lg-block d-md-none d-sm-none">
		<div class="popular">
			<h3>Advertising Video</h3>
			<section class="comments_section mt-4">
				<ul class="comment_list">
					<li>
						<div class="comment_card" data-depth="0">
							<figure class="figure">
								<iframe width="300" height="180" src="https://www.youtube.com/embed/huuZDJ1zA18" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</figure>
						</div>
						<div class="comment_card" data-depth="0">
							<figure class="figure">
								<iframe width="300" height="200" src="https://www.youtube.com/embed/IBs9TE_zzX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</figure>
						</div>
						<div class="comment_card" data-depth="0">
							<figure class="figure">
								<iframe width="300" height="200" src="https://www.youtube.com/embed/tHKpL2aF4PE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</figure>
						</div>
					</li>
				</ul> 
			</section>
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

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/user.blade.php ENDPATH**/ ?>