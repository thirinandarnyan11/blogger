@extends('backend.master')
@section('content')
<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Edit Category</h1>
          <p class="text-muted">Category table have name columns.</p>
        </div>
        <div class="col-lg-1">
          <a href="{{route('categories.index')}}"><button class="btn btn-outline-dark"><i class="fas fa-angle-double-left"></i></button></a>
        </div>
    </div>
        <div class="card">
        	<div class="card-header">
        		<h4 style="color:blue;">Edit Exiting Category Form</h4>
        	</div>
        	<div class="card-body">
        		@if($errors->any())
        		<div class="alert alert-danger">
        			<ul>
        				@foreach($errors->all() as $error)
        				<li> {{ $error}}</li>
        				@endforeach
        			</ul>
        		</div>
        		@endif
        		<form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
        			@csrf
        			@method('PUT')
        			<div class="form-group row">
		        		<label for="categoryName" class="col-sm-2 col-form-label">Name</label>
		        		<div class="col-sm-10">
		        			<input type="text" class="form-control" id="categoryName" placeholder="Enter Category Name" name="name" value="{{$category->name}}">
		        			
		        		</div>
		        	</div>

		        	
		        	<div class="form-group row">
		        		<div class="col-sm-2"></div>
		        		<div class="col-sm-10">
		        			<button type="submit" class="btn btn-primary">
		        				<i class="fa fa-save"></i> Update
		        			</button>
		        		</div>
		        	</div>
		        </form>

        	</div>
        </div>
@endsection