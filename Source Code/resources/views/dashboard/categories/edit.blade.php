@extends('dashboard.layout.main')

@section('title', 'Update Category')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/categories">Categories</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/categories" class="btn btn-primary">Categories</a>
    </div>
@endsection

@section('content')
    <div class="col-lg-12 mb-5 adminForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Update Category</h3>
            </div>
            <div class="card-body">
                <form action="{{route('categories.show',$category['id'])}}" method='POST' enctype="multipart/form-data">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Category Name</label>
                        <input 
                            class="form-control @error('category_name')border-danger @enderror"
                            type="text" 
                            name="category_name" 
                            placeholder="Category Name" 
                            value="{{$category->category_name}}" 
                        />
                        @error('category_name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Category Image</label>
                        <input 
                            class="form-control @error('category_image')border-danger @enderror"
                            type="file" 
                            name="category_image" 
                            value="{{$category->category_image}}" 
                        />
                        @error('category_image')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase" for="category_description">Description</label>
                        <textarea 
                            class="form-control @error('category_description')border-danger @enderror"
                            name="category_description" 
                            id="category_description" 
                            cols="30" 
                            rows="7" 
                            placeholder="Category Description ..."
                        >{{$category->category_description}}
                        </textarea>
                        @error('category_description')
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