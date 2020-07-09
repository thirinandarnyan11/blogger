@extends('frontend.masterblog')
@section('bloggercontent')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <img src="{{$post->user->user_details->profile}}" class="img-fluid blogger_img">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                        <h4>{{ $post->user->name}}</h4>
                        <p>
                            {!! $post->post_content !!}
                        </p>
                    </div>
                    <h4>Display Comments</h4>
                                        @foreach($post->comments as $comment)
                        <div class="display-comment">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <img src="{{$comment->user->user_details->profile}}" class="img-fluid blogger_img">
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 mt-4">
                    
                                <strong>{{ $comment->user->name }}</strong>
                                <p>{{ $comment->content }}</p>
                            </div>
                        </div>
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
