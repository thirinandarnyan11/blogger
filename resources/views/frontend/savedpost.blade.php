@extends('frontend.master')
@section('usercontent')
<div class="container post">
    <div class="row">
        <div class="col-lg-2 d-lg-block d-md-none d-sm-none">
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 d-block">
        @foreach($posts as $row)

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset($row->post->user->user_details->profile)}}" class="img-fluid blogger_img">

                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                    <h4>{{$row->post->user->name}}</h4>

                    <p>{!!$row->post->post_content!!}</p>
                </div>
                    @php
                    $photo=json_decode($row->post->photo);
                    @endphp
                    @foreach($photo as $photos)
                   
                <div class="col-md-6 col-lg-6 col-sm-6 mt-5">
                    <img src="{{asset($photos)}}" class="img-fluid post-img">
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 ml-lg-5 mt-3">
                    <span style="font-size: 15px;color: #08086f;" class="icon icon-heart-o"><button class="like_{{$row->post->id}} likeBtn" data-postid="{{$row->post->id}}">&nbsp;Likes&nbsp;</button></span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2 mt-3">
                    <a href="{{ route('post.show', $row->post->id) }}"><span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;Comment&nbsp;</span></a>                         
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-2 mt-3">
                    <a href="{{ route('userpost.store', $row->post->id) }}">
                        <span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;&nbsp;Saves</span>
                    </a>
                </div>

            </div>
        </div>

                
@endforeach

    </div>
        <div class="col-lg-2 d-lg-block d-md-none d-sm-none">
        </div>
    </div>  
</div>
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){

                $('.likeBtn').on('click',function(){
                //var like_s = $(this).attr('data-like');
        
                    var post_id = $(this).data('postid');
                    // alert(post_id);
                     $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                     });
                     $.ajax({
                        url:"{{route('like','post_id')}}",
                        method:'GET',
                        data:{post_id: post_id},
                        success:function(data)
                        {
                            //var dd=$.parseJSON(data);
                            var dd=JSON.parse(data);
                            //console.log(dd['is_like']);
                            //console.log(dd['likes']);
                            //console.log(post_id);
                            if(post_id == dd['likes']){
                                if(dd['is_like'] ==1){
                                $('.like_'+post_id).html("Unlikes");
                                }
                                else{
                                    $('.like_'+post_id).html("Likes");
                                }
                            }
                        }
                     });    

            });
        });
    </script>
    @endsection
    
@endsection