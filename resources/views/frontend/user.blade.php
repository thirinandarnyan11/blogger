
@extends('frontend.master')
@section('usercontent')

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
<div class="col-lg-5 col-md-12 col-sm-12 d-block" style="margin-top: 40px;">
	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="{{asset('frontendtemplate/usertemplate/images/staff-2.jpg')}}" class="img-fluid blogger_img">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
				<h3>Richard</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>

			<div class="col-md-6 col-lg-6 col-sm-6">
				<img src="{{asset('frontendtemplate/usertemplate/images/bg_4.jpg')}}" class="img-fluid ml-2">

			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img src="{{asset('frontendtemplate/usertemplate/images/bg_4.jpg')}}" class="img-fluid post-img">

			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
				<span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
				<span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;Comments</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
				<span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
			</div>
		</div>
	</div>

	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="{{asset('frontendtemplate/usertemplate/images/staff-2.jpg')}}" class="img-fluid blogger_img">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
				<h3>Richard</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 ml-lg-5 ml-md-3 ml-sm-3">
				<iframe width="450" height="230" src="https://www.youtube.com/embed/trML2M2Mb_g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
				<span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
				<span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;Comments</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
				<span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
			</div>
		</div>
	</div>

	<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="{{asset('frontendtemplate/usertemplate/images/staff-2.jpg')}}" class="img-fluid blogger_img">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
				<h3>Richard</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 ml-lg-5 ml-md-3 ml-sm-3">
				<iframe width="450" height="230	" src="https://www.youtube.com/embed/Zu1dNK0imzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
				<span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
				<span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;Comments</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
				<span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
			</div>
		</div>
	</div>

</div>
<div class="col-lg-4 d-lg-block d-md-none d-sm-none">
	<div class="popular">
		<h3>Popular Blogger's Video</h3>
		<section class="comments_section mt-4">
			<ul class="comment_list">
				<li>
					<div class="comment_card" data-depth="0">
						<figure class="figure">
							<iframe width="200" height="100" src="https://www.youtube.com/embed/W2kBoqObKh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mt-4"></iframe>
							<figcaption class="fig_caption">
								<h5 class="video_name mt-5 ml-2">Naveen Pantra</h5>

							</figcaption>
						</figure>

					</div>
					<div class="comment_card" data-depth="0">
						<figure class="figure">
							<iframe width="200" height="100" src="https://www.youtube.com/embed/W2kBoqObKh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mt-4"></iframe>
							<figcaption class="fig_caption">
								<h5 class="video_name mt-5 ml-2">Naveen Pantra</h5>

							</figcaption>
						</figure>

					</div>
					<div class="comment_card" data-depth="0">
						<figure class="figure">
							<iframe width="200" height="100" src="https://www.youtube.com/embed/W2kBoqObKh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mt-4"></iframe>
							<figcaption class="fig_caption">
								<h5 class="video_name mt-5 ml-2">Naveen Pantra</h5>

							</figcaption>
						</figure>

					</div>
				</li>
			</ul> 
		</section>

	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){

		fetch_customer_data();

		function fetch_customer_data(query = '')
		{
			$.ajax({
				url:"{{route('index.useraction')}}",
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
	});
</script>

@endsection