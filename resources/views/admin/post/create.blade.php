@extends('layouts.master')

@section ('title','Add Post')

@section('content')

<div class="container-fluid px-4">

	<div class="card mt-4">
		 @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
            @endif
		<div class="card-header">
			<h4>Add Post
				<a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Post</a>
			</h4>
		</div>
		<div class="card-body">
			<form method="POST" action="{{url('admin/add-post')}}" enctype="multipart/form-data">
				@csrf
				<div class="mb-3">
					<label for="">Category</label>
					<select name="category_id" class="form-control">
						@foreach($category as $catitem)
						<option value="{{$catitem->id}}">{{$catitem->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="mb-3">
					<label for="">Post Name</label>
					<input type="tex" name="name" class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Slug</label>
					<input type="tex" name="slug" class="form-control">
				</div>
				<div class="mb-3">
					<textarea name="description" id="mySummernote" class="form-control"></textarea>
				</div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="">
                </div>
				<div class="mb-3">
					<label for="">YouTube IframLink</label>
					<input type="text" name="yt_iframe" class="form-control">
				</div>
				<h4>SEO Tag</h4>
				 <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea  name="meta_description" rows="3" class="form-control" >{{old('meta_description')}}</textarea>
                </div>
                 <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea  name="meta_keyword" rows="3" class="form-control" value="">{{ old('meta_keyword') }}</textarea>
                </div>
                <h4>Status</h4>
                <div class="row">
                	<div class="col-md-4">
                		<div class="mb-3">
                			<label for="">Status</label>
                			<input type="checkbox" name="status" >
                		</div>
                	</div>
                </div>
                <div class="col-md-7">
                	<div class="mb-3">
                		<button type="submit" class="btn btn-primary float-end">Save Post</button>
                	</div>
                </div>
			</form>
		</div>
	</div>

</div>
@endsection
