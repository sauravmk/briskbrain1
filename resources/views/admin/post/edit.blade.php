@extends('layouts.master')

@section ('title','Eidt Post')

@section('content')

<div class="container-fluid px-4">

	<div class="card mt-4">

		<div class="card-header">
			<h4>Edit Post
				<a href="{{url('admin/posts')}}" class="btn btn-danger float-end">Back</a>
			</h4>
		</div>
		<div class="card-body">
				@if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
            @endif
			<form method="POST" action="{{url('admin/update-post/'.$post->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="mb-3">
					<label for="">Category</label>
					<select name="category_id" required class="form-control">
						<option>--Select Category--</option>
						@foreach($category as $catitem)
							<option value="{{$catitem->id}}" {{ $post -> category_id == $catitem->id ? 'selected':''}} >
								{{$catitem->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="mb-3">
					<label for="">Post Name</label>
					<input type="tex" name="name" value="{{$post->name}}" class="form-control">
				</div>
				<div class="mb-3">
					<label for="">Slug</label>
					<input type="tex" name="slug" value="{{$post->slug}}"class="form-control">
				</div>
				<div class="mb-3">
					<textarea name="description" id="mySummernote" class="form-control">{!!$post->description!!}</textarea>
				</div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                </div>
				<div class="mb-3">
					<label for="">YouTube IframLink</label>
					<input type="text" name="yt_iframe" value="{{$post->yt_iframe}}"class="form-control">
				</div>
				<h4>SEO Tag</h4>
				 <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$post->meta_title}}"class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea  name="meta_description" rows="3" class="form-control" >{!!$post->meta_description!!}</textarea>
                </div>
                 <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea  name="meta_keyword" rows="3" class="form-control" value="">{!! $post->meta_keyword!!}</textarea>
                </div>
                <h4>Status</h4>
                <div class="row">
                	<div class="col-md-4">
                		<div class="mb-3">
                			<label for="">Status</label>
                			<input type="checkbox" name="status" {{$post->status == '1' ? 'checked':''}}>
                		</div>
                	</div>
                </div>
                <div class="col-md-7">
                	<div class="mb-3">
                		<button type="submit" class="btn btn-primary float-end">Update Post</button>
                	</div>
                </div>
			</form>
		</div>
	</div>

</div>
@endsection
