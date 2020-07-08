@extends('frontend.masterblog')
@section('bloggercontent')
<section class="home-slider js-fullheight owl-carousel">
	<div class="slider-item js-fullheight">
		<div class="container-fluid">
			<div class="row js-fullheight slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-6 text ftco-animate">
					<div class="author mb-4 d-flex align-items-center">
						<a href="#" class="img" style="background-image: url({{$user->user_details->profile}})"></a>
						<div class="ml-3 info">
							<span>Blogger</span>
							<h3><a href="#">{{Auth::user()->name}}</a>, <span>{{$user->user_details->dob}}</span></h3>
						</div>
					</div>
					<div class="text-2">
						<span class="big">Create</span>
						<h1 class="mb-4"><a href="#">Advice customer best comestics</a></h1>
						<p class="mb-4">Change customer most beautiful person</p>
						<a href="{{route('post.index')}}"><button type="button" class="btn btn-outline-primary btn-md">Create Your Blog</button></a>
				
					</div>
				</div>

				<div class="col-md-6 js-fullheight img" style="background-image: url({{asset('frontendtemplate/bloggertemplate/images/bg_1.jpg);')}})"></div>
				
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
					<h6 class="profic">Basic Info</h6><hr class="hor">
					<p>Date of Birth <span>{{$user->user_details->dob}}</span></p>
					<p>Address <span>{{$user->user_details->address}}</span></p>
				</div>
				<div class="col-lg-3">
					<button type="submit" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#basicinfo" data-whatever="@getbootstrap"><i class="icon-edit"></i></button>
					<div class="modal fade" id="basicinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title profic" id="exampleModalLabel">Edit Basic Info</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Date of Birth</label>
											<input type="Date" class="form-control" id="">
										</div>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Address</label>
											<textarea type="" class="form-control" id="">
											</textarea>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Change</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<h6 class="profic">Contact Info</h6><hr class="hor">
					<p>Phone <span>{{$user->user_details->phone}}</span></p>
					<p>Email <span>{{$user->email}}</span></p>
				</div>
				<div class="col-lg-3">
					<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#contactinfo" data-whatever="@getbootstrap"><i class="icon-edit"></i></button>
					<div class="modal fade" id="contactinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title profic" id="exampleModalLabel">Edit Contact Info</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Phone</label>
											<input type="text" class="form-control" id="">
										</div>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Email</label>
											<input type="email" class="form-control" id="">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Change</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-9">
					<h6 class="profic">Edit Profile</h6><hr class="hor">
					<img src="{{$user->user_details->profile}}" class="coverphoto">
				</div>
				<div class="col-lg-3">
					<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="icon-edit"></i></button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title profic" id="exampleModalLabel">Edit Profile</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Cover Photo</label>
											<input type="file" class="form-control" id="">
											<img src="{{asset('frontendtemplate/bloggertemplate/images/bg_1.jpg')}}" class="coverphoto mt-2">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Change</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-9">
					<h6 class="profic">Edit Cover Photo</h6><hr class="hor">
					<img src="{{$user->user_details->cover_photo}}" class="coverphoto">
				</div>
				<div class="col-lg-3">
					<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#coverphoto" data-whatever="@getbootstrap"><i class="icon-edit"></i></button>
					<div class="modal fade" id="coverphoto" tabindex="-1" role="dialog" aria-labelledby="coverphoto" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title profic" id="coverphoto">Edit Cover Photo</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Cover Photo</label>
											<input type="file" class="form-control" id="">
											<img src="{{asset('frontendtemplate/bloggertemplate/images/bg_1.jpg')}}" class="coverphoto mt-2">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Change</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 mt-4">
					<button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#changepsw" data-whatever="@getbootstrap">Change Password</button>
					<div class="modal fade" id="changepsw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title profic" id="exampleModalLabel">Change Password</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">New Password</label>
											<input type="text" class="form-control" id="">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Change</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">

				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 d-block">
                @foreach($post as $row)

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{$row->user->user_details->profile}}" class="img-fluid blogger_img">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                	<h4>{{$row->user->name}}</h4>

                    <p>{!!$row->post_content!!}</p>
                </div>
                    @php
                    $photo=json_decode($row->photo);
                    @endphp
                    @foreach($photo as $photos)
                   
                <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
                    <img src="{{asset($photos)}}" class="img-fluid post-img">
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
                    <span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
                    <a href="{{ route('post.show', $row->id) }}"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;</a>                         
                    </span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
                    <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
                </div>

            </div>
        </div>

                
@endforeach

		</div>
		<div class="col-lg-2 d-lg-block d-md-none d-sm-none">

		</div>
	</div>

</div>
@endsection