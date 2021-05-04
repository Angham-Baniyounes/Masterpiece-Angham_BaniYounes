@extends('dashboard.layout.main')

@section('title', 'Add New Product')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/products">Products</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/products" class="btn btn-primary">Products</a>
    </div>
@endsection

@section('content')
    <div class="col-lg-12 mb-5 subForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Add New Product</h3>
            </div>
            <div class="card-body">
                <form action='/products' method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Name</label>
                        <input 
                            type="text" 
                            name="product_name" 
                            placeholder="Product Name" 
                            class="form-control @error('product_name')border-danger @enderror"
                            value="{{old('product_name')}}"
                        />
                        @error('product_name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Primary Image</label>
                        <input 
                            type="file" 
                            name="product_primary_image" 
                            placeholder="Upload Primary Image" 
                            class="form-control @error('product_primary_image')border-danger @enderror"
                            value="{{old('product_primary_image')}}"
                        />
                        @error('product_primary_image')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Price</label>
                        <input 
                            type="number" 
                            name="product_price" 
                            placeholder="Product Price" 
                            class="form-control @error('product_price')border-danger @enderror"
                            value="{{old('product_price')}}" 
                        />
                        @error('product_price')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Discount</label>
                        <input 
                            type="text" 
                            name="product_discount" 
                            placeholder="Product Discount" 
                            class="form-control @error('product_discount')border-danger @enderror"
                            value="{{old('product_discount')}}" 
                        />
                        @error('product_discount')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">State</label>
                        <select class="custom-select form-control @error('product_state')border-danger @enderror" name="product_state">
                            <option selected>Status</option>
                            <option value="0">Unavailable</option>
                            <option value="1">Available</option>
                        </select>
                        @error('product_state')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Description</label>
                        <textarea 
                            class="form-control @error('product_description')border-danger @enderror"
                            name="product_description" 
                            id="product_description" 
                            cols="30" 
                            rows="7" 
                        >{{old('product_description')}}</textarea>
                        @error('product_description')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Subcategory Type</label>
                        <select 
                            class="custom-select 
                                    form-control 
                                    @error('subcategory_id')border-danger @enderror" 
                            name="subcategory_id"
                        >
                            <option selected>Select Subcategory Type</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                            @endforeach
                        </select>
                        @error('subcategory_id')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Add </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection