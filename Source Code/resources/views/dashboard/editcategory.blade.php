@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12 mb-5 catForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Update Data of Category</h3>
            </div>
            <div class="card-body">
                <form action='/category/updatecategory/{{$category['id']}}' method='POST' enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Name</label>
                        <input type="text" name="name" placeholder="Category Name" class="form-control" value="{{$category['name']}}">
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Image</label>
                        <input type="file" name="img" placeholder="Upload Image" class="form-control" value="{{$category['img']}}">
                        @error('img')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Description</label>
                        <input type="text" name="description" placeholder="Description ..." class="form-control" value="{{$category['description']}}">
                        @error('description')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection