@extends('layouts.master')
@section ('title','Category')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add Category</h4>
        </div>
        <div class="card-body">

            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
            @endif

            <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <label for=""> Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                 <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                </div>
                 <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name="description" id="mySummernote" rows="5" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                </div>

                <h6>SEO Tag</h6>
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

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" value="1" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" value="1">
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
