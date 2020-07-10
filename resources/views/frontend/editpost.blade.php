@extends('frontend.masterblog')
@section('style')
  <style type="text/css">
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
  </style>
@endsection
@section('bloggercontent')
<section class="ftco-intro">
  <div class="container">
    <div class="row justify-content-start mt-5">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
          <a class="" href="{{ route('blogger') }}"><h1>Edit Post</h1></a>
          </div>
          <div class="card-body">
          <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf

              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="custom-select custom-select-sm" name="category_id" style="height: 30px;">
                      <option selected>Choose Category</option>
                        @foreach($categories as $row)
                          <option value="{{$row->id}}"
                                    @if($post->categories_id==$row->id){{'selected'}} @endif >{{$row->name}}
                    
                          </option>
                        @endforeach
                        </select>
                        </div>
                    </div>
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Post Content</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="post_content" name="post_content" placeholder="What is on your mind...">{{$post->post_content}}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-10">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>
     
                      </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          @php
                          $photo=json_decode($post->photo);
                          @endphp
                          @foreach($photo as $photos)
                    
                          <img src="{{asset($photos)}}" class="img-fluid" style="width: 120px; height: 120px;">
                                        @endforeach
                            <input type="hidden" name="oldphoto" value="{{$post->photo}}">
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="profile-tab">
                          <input type="file" multiple="true" name="photo[]" accept='image/*'>
                        </div>
                    </div>
                  </div>
              </div>
              <div id="image_preview"></div>
                

              <div class="form-group row mt-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary" name='submitImage' value="Update"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
