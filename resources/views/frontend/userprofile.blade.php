@extends('frontend.masterblog')
@section('bloggercontent')
<section class="home-slider js-fullheight owl-carousel" style="margin-top: -38px;">
	<div class="slider-item js-fullheight">
		<div class="container-fluid">
			<div class="row js-fullheight slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-6 text ftco-animate">
					<div class="author mb-4 d-flex align-items-center">
						<a href="#" class="img" style="background-image: url({{asset('frontendtemplate/bloggertemplate/images/naychi.jpg);')}})"></a>
						<div class="ml-3 info">
							<span>User</span>
							<h3><a href="#">{{Auth::user()->name}}</a>, <span>{{$user->user_details->dob}}</span></h3>
						</div>
					</div>
					<div class="text-2">
						<span class="big">Create</span>
						<h1 class="mb-4"><a href="#">Advice customer best comestics</a></h1>
						<p class="mb-4">Change customer most beautiful person</p>
						{{--<a href="{{route('post.index')}}"><button type="button" class="btn btn-outline-primary btn-md">Create Your Blog</button></a>--}}

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
					<p>Phone <span>{{$user->user_details->phone}}</span></p>
					{{--<p>Email <span>{{$user->email}}</span></p>--}}
				</div>
				<div class="col-lg-3">
					<button type="submit" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#basicinfo" data-whatever="@getbootstrap" style="background: #08086f;color: white;"><i class="icon-edit"></i></button>
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
									<form action="{{route('updateuserinfo',$user->id)}}" method="POST">
										@csrf
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Date of Birth</label>
											<input type="text" class="form-control" id="dob" name="dob" value="{{$user->user_details->dob}}">
										</div>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Address</label>
											<textarea type="" class="form-control" id="address" name="address" >{{$user->user_details->address}}
											</textarea>
										</div>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Phone</label>
											<input type="text" class="form-control" id="phone" name="phone" value="{{$user->user_details->phone}}">
										</div>
										{{--<div class="form-group">
											<label for="recipient-name" class="col-form-label">Email</label>
											<input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
										</div>--}}
										<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Change</button>
								</div>
									</form>
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
					<button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="background: #08086f;color: white;"><i class="icon-edit"></i></button>
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
									<form action="{{route('updateuseprofile',$user->id)}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Profile Photo</label>
											<nav>
							                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
							                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile</a>
							                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>
							                    </div>
                							</nav>
							                <div class="tab-content" id="nav-tabContent">
							                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							                        <img src="{{$user->user_details->profile}}" id="oldPhoto" height="200px" width="200px" class="img-fluid mt-3">
							                        <input type="hidden" name="oldProfile" value="{{$user->user_details->profile}}">
							                    </div>
							                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							                        <input type="file" name="profile" class="mt-3" accept="images/*">
							                    </div>
							                </div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Change</button>
										</div>
									</form>
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
					<button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal" data-target="#coverphoto" data-whatever="@getbootstrap" style="background: #08086f;color: white;"><i class="icon-edit"></i></button>
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
									<form action="{{route('updateusercover',$user->id)}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Cover Photo</label>
											<nav>
							                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
							                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-cover" role="tab" aria-controls="nav-cover" aria-selected="true">Old Cover</a>
							                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-coverphoto" role="tab" aria-controls="nav-profile" aria-selected="false">New Cover</a>
							                    </div>
                							</nav>
							                <div class="tab-content" id="nav-tabContent">
							                    <div class="tab-pane fade show" id="nav-cover" role="tabpanel" aria-labelledby="nav-cover-tab">
							                        <img src="{{$user->user_details->cover_photo}}" id="oldcover" height="200px" width="200px" class="img-fluid mt-3">
							                        <input type="hidden" name="oldcover" value="{{$user->user_details->cover_photo}}">
							                    </div>
							                    <div class="tab-pane fade" id="nav-coverphoto" role="tabpanel" aria-labelledby="nav-profile-tab">
							                        <input type="file" name="cover_photo" class="mt-3" accept="images/*">
							                    </div>
							                </div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Change</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{--<div class="row">
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
			</div>--}}
		</div>
	</div>

</div>
@endsection