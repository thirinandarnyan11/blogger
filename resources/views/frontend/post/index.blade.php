@extends('frontend.masterblog')
@section('bloggercontent')

@foreach($posts as $row)
    <div class="col-lg-4 col-md-12 col-sm-12 d-block">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('frontendtemplate/usertemplate/images/staff-2.jpg')}}" class="img-fluid blogger_img">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                    <p>{{$row->post_content}}</p>
                </div>
                    @php
                    $photo=json_decode($row->photo);
                    @endphp
                    @foreach($photo as $photos)
                   
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <img src="{{asset($photos)}}" class="img-fluid post-img">
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
                    <span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
                    <span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;                        <a href="{{ route('post.show', $row->id) }}" class="btn btn-primary">Comment</a>
                    </span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
                    <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
                </div>

            </div>
        </div>
    </div>
@endforeach
    
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Manage Posts</h1>
            <a href="{{ route('post.create') }}" class="btn btn-success" style="float: right">Create Post</a>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>--}}
@endsection
