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


{{--<section class="home-slider js-fullheight owl-carousel">
  <div class="slider-item js-fullheight">
    <div class="container-fluid">
      <div class="row js-fullheight slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-6 text ftco-animate">
          <div class="author mb-4 d-flex align-items-center">
            <a href="#" class="img" style="background-image: url({{asset('frontendtemplate/bloggertemplate/images/naychi.jpg);')}})"></a>
            <div class="ml-3 info">
              <span>Blogger</span>
              <h3><a href="#">Nay Chi Oo</a>, <span>October 04, 2018</span></h3>
            </div>
          </div>
          <div class="text-2">
            <span class="big">Create</span>
            <h1 class="mb-4"><a href="#">Advice customer best comestics</a></h1>
            <p class="mb-4">Change customer most beautiful person</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Create Your Blog</a></p>
          </div>
        </div>

        <div class="col-md-6 js-fullheight img" style="background-image: url({{asset('frontendtemplate/bloggertemplate/images/bg_1.jpg);')}})"></div>
        
      </div>
    </div>
  </div>
</section>--}}


{{--<section class="ftco-intro">
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
                <label for="categoryName" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                 <textarea id="summernote" name="summernote" class="form-control"></textarea>
               </div>
             </div>

             <div class="form-group row">
              <label for="categoryName" class="col-sm-2 col-form-label">Photo</label>
              <div class="col-sm-10">
                <input type="file" id="uploadFile" name="uploadFile[]" multiple/>

              </div>

            </div>

            <div id="image_preview"></div>

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
</section> --}}


<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Test Summernote</h4>
      </div>
      <div class="panel-body">
        <form action="{{url('insert')}}" method="post" enctype="multipart/form-data">
          {!!csrf_field()!!}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <div class="form-group">
            
           <input type="file" name="photo" accept="images/*">
          </div>
          <div class="form-group">
            <textarea id="summernote" name="summernote" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="send" id="send" value="Publish" class="btn btn-success">
            <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="clear">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#summernote').summernote({
        callbacks: {
          onFileUpload: function(file) {
            myOwnCallBack(file[0]);
          },
        },
        height:'250px',
        placeholder:'Content Here',
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New','Merriweather'],       

      })


      $('#clear').on('click',function(){
        $('#summernote').summernote('code',null);
      })
    })
  </script>
  
@endsection
