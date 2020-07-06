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
			$output="";
			if($total_row >0)
			{
				foreach($data as $row)
				{
					$output .= '
					
					<h5 class="name mt-2 ml-3">'.$row->name.'</h5><br>
					
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
}
