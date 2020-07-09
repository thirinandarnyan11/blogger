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
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card shadow-lg p-3 mb-5 bg-white rounded">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<img src="<?php echo e($row->user->user_details->profile); ?>" class="img-fluid blogger_img">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
					<h4><?php echo e($row->user->name); ?></h4>
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
<<<<<<< HEAD
				<div class="col-lg-4 col-md-3 col-sm-3 ml-lg-5 mt-3">
					<a href="<?php echo e(route('like',$row->id)); ?>" ><span style="font-size: 15px;" class="icon icon-heart-o" id="like">&nbsp;Likes&nbsp;</span></a>
=======
				<div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
				<button class="likebtn" id="like"><a href="<?php echo e(route('like',$row->id)); ?>" ><span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;<span id="text">Likes</span>&nbsp;</a></button>
					

                   
>>>>>>> bba15898e79b3f75f8b3877924d582ea83aff7d4
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
<<<<<<< HEAD
					<a href="<?php echo e(route('post.show', $row->id)); ?>"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comments&nbsp;</a>                       
					</span>
=======
					<a href="<?php echo e(route('post.show', $row->id)); ?>"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comments&nbsp;</span></a>                         
					
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
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
<<<<<<< HEAD

	<script type="text/javascript">
=======
   <script type="text/javascript">
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
		$(document).ready(function(){
			fetch_customer_data();
			function fetch_customer_data(query = '')
			{
				$.ajax({
					url:"<?php echo e(route('index.useraction')); ?>",
					method:'GET',
					data:{query:query},
					dataType:'json',
					success:function(data)
					{
						$('#showdata').html(data.table_data);
						$('#total_records').text(data.total_data);
					}
				})
			}
			$(document).on('keyup','#search',function(){
				var query = $(this).val();
				fetch_customer_data(query);
			});

			
			// $('.likebtn').on('click',function(event){

			// 	var id= this.id;
			// 	$.ajax({
			// 		url:'/like/{id}',
			// 		method:'GET',
			// 		data:{id:id},
			// 		success:function(data)
			// 		{
			// 			console.log("Hello");
			// 		}
			// 	})
			// })

		});
	
	</script>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/user.blade.php ENDPATH**/ ?>