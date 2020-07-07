<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
class LiveSearchController extends Controller
{
	function action(Request $request)
	{
		if($request->ajax())
		{
			$query = $request->get('query');
			if($query != '')
			{
				$data = DB::table('categories')
				->where('name','like','%'.$query.'%')
				->orderBy('id','desc')
				->get();
			}
			else
			{
				$data = DB::table('categories')
				-> orderBy('id','desc')
				->get();
			}
			$total_row = $data->count();
			$output="";
			if($total_row >0)
			{
				foreach($data as $row)
				{
					$output .= '
					<h3>'.$row->name.'</h3><hr class="post_hr">
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
					</div>

					';
				}
			}
			else
			{
				$output = '
				<tr>
				<td align="center" colspan="5">No Data Founds</td>
				</tr>
				';
			}
			$data= array(
				'table_data' => $output,
			);
			echo json_encode($data);
		}
	}

	function useraction(Request $request)
	{
		if($request->ajax())
		{
			$query = $request->get('query');
			if($query != '')
			{
				$data = User::role('blogger')
				->join('user_details', 'user_details.user_id', '=', 'users.id')
				->join('posts', 'posts.user_id', '=', 'users.id')
				->select('user_details.profile','posts.post_content')
				->where('name','like','%'.$query.'%')
				->orderBy('id','desc')
				->get();

				
			}
			else
			{
				$data = User::role('blogger')
				-> orderBy('id','desc')
				->get();
				
			}
			$total_row = $data->count();
			$output="";$post_output="";$video_output="";

			if($total_row >0)
			{
				foreach($data as $row)
				{
					$output .= '
					<h2>'.$row->name.'</h2>
					';
					$post_output.='
					<div class="card shadow-lg p-3 mb-5 bg-white rounded">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3">

							<img src="'.$row->user_details->profile.'" class="img-fluid blogger_img">
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 mt-2">
							<h3>'.$row->name.'</h3>
							<p>'.$row->post_content.'</p>
							
						</div>

						<div class="col-md-6 col-lg-6 col-sm-6">
							<img src="" class="img-fluid ml-2">

						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="" class="img-fluid post-img">

						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 ml-lg-5 mt-3">
							<span style="font-size: 15px;" class="icon icon-heart-o">&nbsp;15&nbsp;Likes</span>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 mt-2 mt-3">
							<span style="font-size: 15px;" class="icon icon-comment-o">&nbsp;15&nbsp;Comments</span>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 mt-2 mt-3">
							<span style="font-size: 15px;" class="icon icon-bookmark-o">&nbsp;15&nbsp;Saves</span>
						</div>
					</div>
				</div>
					';
					$video_output.='
						<div class="popular">
							<h3>Popular Blogger Video</h3>
							<section class="comments_section mt-4">
								<ul class="comment_list">
									<li>
										<div class="comment_card" data-depth="0">
											<figure class="figure">
												<iframe width="200" height="100" src="https://www.youtube.com/embed/W2kBoqObKh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mt-4"></iframe>
												<figcaption class="fig_caption">
													<h5 class="video_name mt-5 ml-2">Naveen Pantra</h5>

												</figcaption>
											</figure>

										</div>
									</li>
								</ul> 
							</section>
						</div>
					';
				}

			}
			else
			{
				$output = '
				<tr>
				<td align="center" colspan="5">No Data Founds</td>
				</tr>
				';
				$post_output = '
				<tr>
				<td align="center" colspan="5">No Data Founds</td>
				</tr>
				';
				$video_output = '
				<tr>
				<td align="center" colspan="5">No Data Founds</td>
				</tr>
				';
			}
			$data= array(
				'table_data' => $output,
				'table_d' => $post_output,
				'table_v' => $video_output,
			);
			echo json_encode($data);
		}
	}

	
}
