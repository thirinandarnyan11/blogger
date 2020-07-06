@extends('backend.dashboard')
@section('content')
	<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Accepted user's detail</h1>
         
        </div>
        <div class="col-lg-1">
          <a href="{{route('bloggerlist.index')}}"><button class="btn btn-outline-dark"><i class="fas fa-angle-double-left"></i></button></a>
        </div>
    </div>
        <div class="card">
        	<div class="card-header">
        		<h4 style="color:blue;">Accept User's Detail Form</h4>
        	</div>
        	<div class="card-body">
        		@if(count($errors)>0)
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">
                        X
                      </button>
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error}}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif
                @if($message=Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>
                        <strong>{{$message}}</strong>
                    </div>
                      
                @endif
                <div class="container">
                    <div class="row">
                        <form method="post" action="{{url('sendemail/send')}}">
                    {{csrf_field()}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{$user->email}}">
                            </div>
                              
                            <!-- <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                            </div>
                             -->  
                            <div class="form-group">
                                <input type="submit" name="send" value="Send" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
        	</div>
        </div>
@endsection