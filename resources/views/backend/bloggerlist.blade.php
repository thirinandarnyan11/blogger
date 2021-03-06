@extends('backend.master')
@section('style')
<link href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Blogger List</h1>
        </div>
        
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>DOB</th>
		<th>Action</th>

	</thead>
	<tbody >
		@php $i=1; @endphp

		@foreach($users as $row)

		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->email}}</td>
			<td>{{$row->user_details->phone}}</td>
			<td>{{$row->user_details->address}}</td>
			<td>{{$row->user_details->dob}}</td>

			<td><a href="{{route('bloggerlist.show',$row->id)}}" class="btn btn-primary" style="display: inline;"><i class="fas fa-user-check"></i> </a>

			{{--<form method="POST" action="{{route('denied',$row->id)}}" onsubmit="return confirm('Are you sure denied this blogger?')">
				@csrf
				@method('POST')
				<button type="submit" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
			</form>--}}

	<a href="{{route('denied',$row->id)}}" class="btn btn-danger" style="display: inline;"><i class="fas fa-user-check"></i> </a>


		</tr>
		@endforeach


	</tbody>
	<tfoot>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>DOB</th>
		<th>Action</th>

	</tfoot>
</table>
@endsection
@section('script')
<script src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>
@endsection