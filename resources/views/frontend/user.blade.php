
@extends('frontend.master')
@section('usercontent')
<div class="row">
	<div class="col-lg-3 d-lg-block d-md-none d-sm-none">
		<div class="row">
				<div class="popular">
					<h3 class="ml-3">Popular Blogger</h3>
					<section class="comments_section mt-4">
						<ul class="comment_list">
							<li>
								<div class="comment_card" data-depth="0">
									<figure class="figure">
										<figcaption class="fig_caption" id="showdata">
			                            	
			                        	</figcaption>
									</figure>

								</div>

							</li>
						</ul> 
					</section>
				</div>			
		</div> 
	</div>
	<div class="col-lg-5 col-md-12 col-sm-12 d-block" style="margin-top: 40px;" id="showpost">

	</div>
	<div class="col-lg-4 d-lg-block d-md-none d-sm-none" id="showvideo">
		
	</div>
</div>

<div class="container-fluid post" id="showdata">
	
</div>
<script type="text/javascript">
	$(document).ready(function(){

		fetch_customer_data();

		function fetch_customer_data(query = '')
		{
			$.ajax({
				url:"{{route('index.useraction')}}",
				method:'GET',
				data:{query:query},
				dataType:'json',
				success:function(data)
				{
					$('#showdata').html(data.table_data);
					$('#showpost').html(data.table_d);
					$('#showvideo').html(data.table_v);
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