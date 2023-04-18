@extends('layouts.master')

@section ('title','View Posts')

@section('content')

<div class="container-fluid px-4">

	<div class="card mt-4">
		<div class="card-header">
			<h4>View Post
				<a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Post</a>
			</h4>
		</div>
		<div class="card-body">
		@if (session('message'))
        	<div class="alert alert-success">{{ session('message')}}</div>
        @endif
        <div class="table-responsive">

        <table  id="mydatatable" class="table table-bordered">
        	<thead>
        		<tr>
        			<th>ID</th>
        			<th>Category</th>
        			<th>Post Name</th>
                    <th>Image</th>
        			<th>Status</th>
        			<th>Edit</th>
        			<th>Delete</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($posts as $post)
        		<tr>
        			<td>{{ $post->id }}</td>
        			<td>{{ $post->category->name ?? 'name not found'}}</td>
        			<td>{{ $post->name }}</td>
                    <td>
                        <img class="foo" src="{{asset('uploads/category/post/'.$post->image)}}" width="80px" height="60px">

                    </td>
        			<td>{{ $post->status  == '1' ? 'Hidden':'Visible'}}</td>
        			<td>
        				<a href="{{url('admin/post/'.$post->id)}}" class="btn btn-success">Edit</a>
        			</td>
        			<td>
        				<a href="{{url('admin/delete-post/'.$post->id)}}" class="btn btn-danger">Delete</a>
        			</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
        </div>
		</div>
	</div>

</div>
@endsection
