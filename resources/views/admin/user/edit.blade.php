@extends('layouts.master')	

@section ('title','Edit Users')

@section('content')
<div class="container-fluid px-4">
	
	<div class="card mt-4">
		<div class="card-header">
			<h4>Edit Users
				<a href="{{url('admin/users')}}" class="btn btn-danger">Back</a>
			</h4>
		</div>
	</div>
</div>
@endsection