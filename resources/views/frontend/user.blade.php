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
										@foreach($users as $user)
										<h1>{{$user->name}}</h1>
										@endforeach
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
		@if($message=Session::get('save'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>
                        <strong>{{$message}}</strong>
                    </div>
                      
                @endif

		@foreach($posts as $row)
		<div class="card shadow-lg p-3 mb-5 bg-white rounded">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<a href="{{route('profile',$row->user->id)}}"><img src="{{$row->user->user_details->profile}}" class="img-fluid blogger_img"></a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
					<a href="{{route('profile',$row->user->id)}}">
                        <h4>{{$row->user->name}}</h4></a>
					<p>{!!$row->post_content!!}</p>
				</div>
				@php
				$photo=json_decode($row->photo);
				@endphp
				@foreach($photo as $photos)
					<div class="col-md-6 col-lg-6 col-sm-6 mt-5 s">
						<img src="{{asset($photos)}}" class="img-fluid post-img">
					</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-3 col-sm-3 ml-lg-5 mt-3">
					{{--<a href="{{route('like',$row->id)}}" ><span style="font-size: 15px;" class="icon icon-heart-o" id="like">&nbsp;Likes&nbsp;</span></a>--}}
					<span style="font-size: 15px;color: #08086f;" class="icon icon-heart-o"><button class="like_{{$row->id}} likeBtn" data-postid="{{$row->id}}">&nbsp;Likes&nbsp;</button></span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
					<a href="{{ route('post.show', $row->id) }}"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comments&nbsp;</span></a>                         
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
					<a href="{{ route('userpost.store', $row->id) }}">
                    	<span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;Saves&nbsp;</span>
                    </a>
				</div>
			</div>
		</div>
		@endforeach
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
	@section('script')
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
					 	url:"{{route('like','post_id')}}",
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
	@endsection
@endsection
