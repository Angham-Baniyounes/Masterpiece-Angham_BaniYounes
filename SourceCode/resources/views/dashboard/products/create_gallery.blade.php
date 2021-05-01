@extends('dashboard.layout.main')

@section('title', 'Add Images Product')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/products">Products</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/products/create" class="btn btn-primary">Add New Product</a>
    </div>
@endsection

@section('content')
    <div class="col-lg-12 mb-5 galleryForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Add Product Images</h3>
            </div>
            <div class="card-body">
                <form action='/gallery-product' method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Name : </label>
                        <span>{{$product->product_name}}</span>
                        <input type="hidden" name="product_id" value="{{$id}}">
                        @error('product_id')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Images</label>
                        <input type="file" name="product_images[]" class="form-control" placeholder="product images"  multiple>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Add Gallery Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection