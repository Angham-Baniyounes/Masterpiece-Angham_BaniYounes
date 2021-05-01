@extends('dashboard.layout.main')

@section('title', 'Product Details')

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
    <div class="profile-content">
        <div class="row productDetails">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Product Details</h2>
                        <div class="col">
                            <div class="profile-img">
                                <img 
                                class="rounded mx-auto d-block mb-5"
                                src="{{asset('images')}}/{{$product->product_primary_image}}" 
                                width="200" 
                                height="160" 
                                alt="{{$product->product_name}} Product Image"
                            />
                            </div>
                        </div>
                        <ul class="list-unstyled profile-about-list list-gallery">
                            <li>
                                <i class="material-icons-outlined">inventory_2</i>
                                <span class="d-flex">
                                    <h5 class="font-weight-bold">Product Name : &nbsp;&nbsp; </h5>
                                    <p class="text-dark">{{$product->product_name}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined">inventory_2</i>
                                <span class="d-flex">
                                    <h5 class="font-weight-bold">Subcategory Type : &nbsp;&nbsp; </h5>
                                    <p class="text-dark">{{$product->subcategory->subcategory_name}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined">inventory_2</i>
                                <span class="d-flex">
                                    <h5 class="font-weight-bold">Product Price : &nbsp;&nbsp; </h5>
                                    <p class="text-dark">{{$product->product_price}} JD</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined">inventory_2</i>
                                <span class="d-flex">
                                    <p class="font-weight-bold">Product Discount : &nbsp;&nbsp; </p>
                                    <p class="text-dark">{{$product->product_discount}} %</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined">inventory_2</i>
                                <span class="d-flex">
                                    <h5 class="font-weight-bold">Product State : &nbsp;&nbsp; </h5>
                                    <p class="text-dark">
                                        @if ($product->product_state == 1)
                                            Avaliable
                                        @else
                                            Unavailable
                                        @endif
                                    </p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined">inventory_2</i>
                                <span> 
                                    <h5 class="font-weight-bold">Product Description : </h5>
                                    <p class="text-dark">{{$product->product_description}}</p>
                                </span>
                            </li>
                            {{-- btns --}}
                            <div class="d-flex mt-3 p-3 justify-content-between">
                                <li>
                                <i class="material-icons-outlined text-info">collections</i>
                                <span> 
                                    <a href="/gallery/{{$product->id}}" class="text-info">
                                        Gallery
                                    </a>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined text-warning">edit</i>
                                <span> 
                                    <a href="/products/{{$product->id}}/edit" class="text-warning">
                                        Edit
                                    </a>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons-outlined text-danger">delete</i>
                                <span> 
                                    <a href="/products/{{$product->id}}" class="text-danger">
                                        <form action="/products/{{$product->id}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a onclick="$(this).closest('form').submit();" class="text-danger" style="cursor:pointer;">Delete</a>
                                        </form>
                                    </a>
                                </span>
                            </li>
                            </div>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection