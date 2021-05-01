@extends('dashboard.layout.main')

@section('title', 'Subcategory Details')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/subcategories">Subcategory</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/subcategories/create" class="btn btn-primary">Add New Subcategory</a>
    </div>
@endsection

@section('content')
    <div class="profile-content">
        <div class="row subcategoryDetails">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Subcategory Details</h2>
                        <div class="col">
                            <div class="profile-img">
                                <img 
                                class="rounded mx-auto d-block"
                                src="{{asset('images')}}/{{$subcategory->subcategory_image}}" 
                                width="200" 
                                height="160" 
                                alt="{{$subcategory->subcategory_name}} Subcategory Image"
                            />
                            </div>
                        </div>
                        <ul class="list-unstyled profile-about-list list-profile">
                            <li>
                                <i class="material-icons">category</i>
                                <span>
                                    <h5 class="font-weight-bold">Subcategory Name : </h5>
                                    <p class="text-dark">{{$subcategory->subcategory_name}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons">category</i>
                                <span>
                                    <h5 class="font-weight-bold">Category Type : </h5>
                                    <p class="text-dark">{{$subcategory->category->category_name}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons">category</i>
                                <span> 
                                    <h5 class="font-weight-bold">Subcategory Description : </h5>
                                    <p class="text-dark">{{$subcategory->subcategory_description}}</p>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection