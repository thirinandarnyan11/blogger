@extends('frontend.masterblog')
@section('bloggercontent')

<div class="container">

    <div class="row justify-content-center">
<<<<<<< HEAD
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
=======
        <div class="col-lg-8 col-md-12 col-sm-12 d-block" style="margin-top:40px;">

            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <img src="{{asset($post->user->user_details->profile)}}" class="img-fluid blogger_img">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                        <h4>{{$post->user->name}}</h4>

                        <p>{!!$post->post_content!!}</p>
                    </div>
                        @php
                        $photo=json_decode($post->photo);
                        @endphp
                        @foreach($photo as $photos)
                       
                    <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
                        <img src="{{asset($photos)}}" class="img-fluid post-img">
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-3 ml-lg-5 mt-3">
                        <span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;&nbsp;Likes</span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
                        <span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comment&nbsp;</span>                         
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
                        <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;&nbsp;Saves</span>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h4>Display Comments</h4>
                        @foreach($post->comments as $comment)
                        <div class="display-comment">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <img src="{{asset($comment->user->user_details->profile)}}" class="img-fluid blogger_img">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 mt-4">
                    
                                <strong>{{ $comment->user->name }}</strong>
                                <p>{{ $comment->content }}</p>
                            </div>
                        </div>
                        {{--@foreach()
                        <div class="reply-comment">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <img src="{{asset($replies->user->user_details->profile)}}" class="img-fluid blogger_img">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 mt-4">
                    
                                <strong>{{ $replies->user->name }}</strong>
                                <p>{{ $replies->content }}</p>
                            </div>
                        </div>--}}
                        <br><br><br><br><br>
                        <a href="" id="reply"></a>
                          {{--  <form method="post" action="{{ route('comment.reply',$comment->id) }}">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" name="comment_body" class="form-control mt-3" />
                                    <input type="hidden" name="post_id" value="{{ $comment->post_id }}"/>
                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" value="Reply" />
                                </div>
                            </form>--}}
                            
                    @endforeach

                    <hr />
                    
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
