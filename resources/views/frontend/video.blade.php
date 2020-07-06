@extends('frontend.master')
@section('usercontent')
<div class="container post" id="showdata">
	<!-- <h3>MakeUp Tutorial Videos</h3><hr class="post_hr">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/Zu1dNK0imzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/Zu1dNK0imzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/Zu1dNK0imzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div> -->
	<!-- <h3 class="mt-5">EyeMakeUp Tutorial Videos</h3><hr class="post_hr">
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/d8bct2_ix4U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/d8bct2_ix4U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/d8bct2_ix4U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	<h3 class="mt-5">Lipstick Tutorial Videos</h3><hr class="post_hr">
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/xl9v08Lcb04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/xl9v08Lcb04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<iframe width="350" height="200" src="https://www.youtube.com/embed/xl9v08Lcb04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div> -->
</div>
<script type="text/javascript">
		$(document).ready(function(){

			fetch_customer_data();

			function fetch_customer_data(query = '')
			{
				$.ajax({
					url:"{{route('videoshow.action')}}",
					method:'GET',
					data:{query:query},
					dataType:'json',
					success:function(data)
					{
						$('#showdata').html(data.table_data);
						$('#total_records').text(data.total_data);
					}
				})
			}
			$(document).on('keyup','#search',function(){
				var query = $(this).val();
				fetch_customer_data(query);
			});
		});
</script>

@endsection