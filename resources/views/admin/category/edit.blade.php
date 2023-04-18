@extends('layouts.master')
@section ('title','Category')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Category</h4>
        </div>
        <div class="card-body">

            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
            @endif

            <form action="{{url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for=""> Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
                 <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $category->slug}}">
                </div>
                 <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name="description" rows="5" id="mySummernote" class="form-control">{{$category->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ $category->name}}">
                </div>

                <h6>SEO Tag</h6>
                 <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title }}">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea  name="meta_description" rows="3" class="form-control" >{{$category->meta_description}}</textarea>
                </div>
                 <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea  name="meta_keyword" rows="3" class="form-control" value="">{{ $category->meta_keyword }}</textarea>
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" {{ $category->navbar_status == '1' ? 'checked':'' }} >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }} >
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary float-end"> Save Category </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
