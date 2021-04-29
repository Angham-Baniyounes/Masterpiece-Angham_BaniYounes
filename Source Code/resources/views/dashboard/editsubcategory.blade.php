@extends('dashboard.layout.main')
@section('content')
<div class="col-lg-12 mb-5 subForm">
    <div class="card">
        <div class="card-header">
            <h3 class="h6 text-uppercase mb-0">Add New SubCategory</h3>
        </div>
        <div class="card-body">
            <form action='/subcategory/updatesubcategory/{{$subcategory['id']}}' method='POST' enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Name</label>
                    <input type="text" name="name" placeholder="Subcategory Name" class="form-control">
                    @error('name')
                        <small class='text-danger'>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Image</label>
                    <input type="file" name="img" placeholder="Upload Image" class="form-control">
                    @error('img')
                        <small class='text-danger'>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Description</label>
                    <input type="text" name="description" placeholder="description ..." class="form-control">
                    @error('description')
                        <small class='text-danger'>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Category Type</label>
                    <select class="custom-select form-control" name="category_id">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                    </select>
                    @error('category_id')
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