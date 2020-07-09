$('.like').on('click',function(){
	//var like_s = $(this).attr('data-like');
	document.getElementsByClassName('like').innerHTML="Unlike";
	var post_id = $(this).data('postid');
	// alert(post_id);
	 $.ajaxSetup({
	 	headers: {
	 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 	}
	 });
	 $.ajax({
	 	url:"{{route('like')}}",
	 	method:'POST',
	 	data:{post_id: post_id ,_token: token},
	 	success:function(is_like)
	 	{
	 		 $(".like").html("Unlike");
	 	}
	 })

	});