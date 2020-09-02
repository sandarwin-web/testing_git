@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
	<h1 class="h3 mb-0 text-gray-800">Subcategory List</h1><br>
	<a href="{{route('subcategories.create')}}" class="btn btn-success">Add New</a>
	</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				 @php $i=1;@endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<th>{{$i++}}</th>
					<td>{{$subcategory->name}}</td>
					<td>
						<a href="#" class="btn btn-danger">Delete</a>
						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-info">Detail</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection