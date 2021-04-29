@extends('dashboard.layout.main')

@section('title', 'Category Details')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/categories">Category</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/categories/create" class="btn btn-primary">Add New Category</a>
    </div>
@endsection

@section('content')
    <div class="profile-content">
        <div class="row categoryDetails">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category Details</h5>
                        <div class="col">
                            <div class="profile-img">
                                <img 
                                    class="rounded mx-auto d-block" 
                                    src="{{asset('images')}}/{{$category->category_image}}" 
                                    width="100" 
                                    height="100" 
                                    alt="{{$category->category_name}} Category Image"
                                />
                            </div>
                        </div>
                        <ul class="list-unstyled profile-about-list list-profile">
                            <li>
                                <i class="material-icons">category</i>
                                <span>
                                    <h5 class="font-weight-bold">Category Name : </h5>
                                    <p class="text-dark">{{$category->category_name}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons">category</i>
                                <span> 
                                    <h5 class="font-weight-bold">Category Description : </h5>
                                    <p class="text-dark">{{$category->category_description}}</p>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection