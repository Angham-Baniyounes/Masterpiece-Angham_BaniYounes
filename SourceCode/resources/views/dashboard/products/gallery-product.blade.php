@extends('dashboard.layout.main')

@section('title', 'Gallery Product Images')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/products">Product</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/products/create" class="btn btn-primary">Add New Product</a>
    </div>
@endsection

@section('content')
    <div class="gallery" style="display: contents;">
        @foreach ($images as $image)
        <div class="col-sm-6 col-lg-4 col-md-3">
            <div class="gal-detail thumb">
                <img 
                    src="{{asset('images')}}/{{$image->product_image}}" 
                    class="thumb-img" 
                    style="border-radius: 15px;"
                    width="250"
                    height="270"
                    alt="product Image"
                />
                <div class="ga-border"></div>
                <div class="actionbtns">
                    <div>
                        <a href="/image/{{$image->id}}/edit">
                            <button type="button" class="btn btn-outline-warning">
                                <i class="material-icons text-warning">
                                    edit
                                </i>
                            </button>
                        </a>
                    </div>
                    <div>
                        <form action="/image/{{$image->id}}" method="POST">
                            @method('DELETE')
                            @csrf 
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="material-icons text-danger">
                            delete</i>
                            </button>  
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection