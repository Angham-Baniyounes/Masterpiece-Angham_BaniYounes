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
    <div class="col-xl">
        @if ($message = Session::get('msg'))
            <div class="alert alert-info">
                <p class="text-dark">{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Products Data</h5>
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Primary Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Subcategory Type</th>
                            <th scope="col">Gallery</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">
                                {{$product->id}}
                            </th>
                            <td>
                                {{$product->product_name}}
                            </td>
                            <td>
                                <img src="{{asset('images')}}/{{$product->product_primary_image}}" width="65px" alt="{{$product->product_name}} Image">
                            </td>
                            <td>
                                @if ($product->product_state == 1)
                                    Avaliable
                                @else
                                    Unavailable
                                @endif
                            </td>
                            <td>                       
                                <a href="{{ route('subcategories.show', ['subcategory' => $product->subcategory->id]) }}">{{$product->subcategory->subcategory_name}}</a>
                            </td>
                            <td>
                                <a  href="{{ route('product.gallery', ['id' => $product->id])}}">
                                    <button type="button" class="btn btn-purple">
                                        Add Gallery
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{$product->path()}}">
                                    <button type="button" class="btn btn-info">
                                        Show
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/products/{{$product->id}}/edit">
                                    <button type="button" class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="/products/{{$product->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>      
                {{ $products->links('pagination::custom') }}
            </div>
        </div>
    </div>
@endsection