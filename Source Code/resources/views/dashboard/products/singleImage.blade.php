@extends('dashboard.layout.main')

@section('title', 'Manage Products')

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
    <div class="div-body">
        {{-- @foreach ($images as $image) --}}
        {{-- @foreach ($gallery as $image) --}}
            {{$image}}
        {{-- @endforeach --}}
        <div class="col-sm-6 col-lg-3 col-md-4">
            <div class="gal-detail thumb">
                <a href="#" class="image-popup" title="Screenshot-1">
                    {{-- <img src="{{asset('images')}}/{{$image->product_image}}" class="thumb-img" alt="work-thumbnail"> --}}
                </a>
                <h4 class="text-center">
                    {{-- {{$image->product->product_name}} --}}
                    {{$image}}
                </h4>
                {{-- <div class="ga-border"></div> --}}
                <p class="text-muted text-center actionbtns">
                    <small>
                        {{-- Edit --}}
                        <i class="material-icons text-warning">
                            edit
                        </i>
                        {{-- <a href="/gallery/{{$image->id}}/edit">
                            <button type="button" class="btn btn-warning">
                                Edit
                            </button>
                        </a> --}}
                    </small>
                    <small>
                        <i class="material-icons text-danger">
                            delete
                        </i>
                        {{-- <form action="/gallery/{{$product->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form> --}}
                    </small>
                </p>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection