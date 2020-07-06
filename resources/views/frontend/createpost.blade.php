

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
          <h1>Create Post</h1>
          </div>
          <div class="card-body">
          <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Post Content</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="post_content" name="post_content" placeholder="What is on your mind..."></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                  <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                </div>
              </div>
               <div id="image_preview"></div>
               <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Video</label>
                <div class="col-sm-10">
                  <input type="file" id="uploadVideo" name="uploadVideo" multiple/>
                </div>
              </div>
           
              <div class="form-group row mt-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary" name='submitImage' value="Submit"/>
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