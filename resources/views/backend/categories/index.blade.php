@extends('backend.master')
@section('style')
<link href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="row">
  		<div class="col-lg-11">
          <h1 class="h3 mb-2 text-gray-800">Category List</h1>
        </div>
        <div class="col-lg-1">
          <a href="{{route('categories.create')}}"><button class="btn btn-outline-dark"><i class="fas fa-plus"></i></button></a>
        </div>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<th>No</th>
		<th>Name</th>
		<th>Action</th>

	</thead>
	<tbody >
		@php $i=1; @endphp

		@foreach($categories as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td><a href="{{route('categories.edit',$row->id)}}" class="btn btn-warning" style="display: inline;">Edit </a>
			<form method="POST" action="{{route('categories.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
				@csrf
				@method('DELETE')
				<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
			</form>
		</td>

		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<th>No</th>
		<th>Name</th>
		<th>Action</th>

	</tfoot>
</table>

@endsection
@section('script')
<script src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>
@endsection