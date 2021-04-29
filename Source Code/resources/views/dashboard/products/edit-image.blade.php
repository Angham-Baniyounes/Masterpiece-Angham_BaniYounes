@extends('dashboard.layout.main')

@section('title', 'Update Image')

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
    <div class="col-xl">
        @if ($message = Session::get('msg'))
            <div class="alert alert-info">
                <p class="text-dark">{{ $message }}</p>
            </div>
        @endif
        <div class="col-lg-12 mb-5 subForm">
            <div class="card">
                <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Update product</h3>
                </div>
                <div class="card-body">
                    <form action='/single-image/{{$productImage['id']}}' method='POST' enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        
                        <div class="form-group">
                            <span>{{$productImage}}</span>
                            <input type="hidden" name="id" value="{{$productImage->id}}">
                            @error('id')
                                <small class='text-danger'>{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Product Image</label>
                            <input type="file" name="product_image" class="form-control" placeholder="product image">
                            @error('product_image')
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
    </div>
@endsection