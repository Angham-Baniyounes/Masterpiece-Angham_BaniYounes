@extends('dashboard.layout.main')

@section('title', 'Add New Subcategory')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/subcategories">Subcategories</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/subcategories" class="btn btn-primary">Subcategories</a>
    </div>
@endsection

@section('content')
    <div class="col-xl">
        @if ($message = Session::get('msg'))
            <div class="alert alert-info">
                <p class="text-dark">{{ $message }}</p>
            </div>
        @endif
        <div class="col-lg-12 mb-5 subForm">
            <div class="card">
                <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Add New Subcategory</h3>
                </div>
                <div class="card-body">
                    <form action='/subcategories' method='POST' enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Name</label>
                            <input 
                                class="form-control  @error('subcategory_name')border-danger @enderror"
                                type="text" 
                                name="subcategory_name" 
                                placeholder="Subcategory Name" 
                                value="{{old('subcategory_name')}}" 
                            />
                            @error('subcategory_name')
                                <small class='text-danger'>{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Subcategory Image</label>
                            <input 
                                class="form-control @error('subcategory_image')border-danger @enderror"
                                type="file" 
                                name="subcategory_image" 
                                placeholder="Upload Image" 
                                value="{{old('subcategory_image')}}" 
                            />
                            @error('subcategory_image')
                                <small class='text-danger'>{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label text-uppercase" for="subcategory_description">Subcategory Description</label>
                            <textarea 
                                class="form-control @error('subcategory_description')border-danger @enderror"
                                name="subcategory_description" 
                                id="subcategory_description" 
                                cols="30" 
                                rows="7" 
                            >{{old('subcategory_description')}}</textarea>
                            @error('subcategory_description')
                                <small class='text-danger'>{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Category Type</label>
                            <select 
                                class="custom-select form-control @error('category_id')border-danger @enderror" 
                                name="category_id"
                            >
                                <option selected>Open this select menu</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class='text-danger'>{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Add Subcategory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection