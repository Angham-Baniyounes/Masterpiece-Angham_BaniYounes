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
                            {{-- <th scope="col">Product Id</th> --}}
                            <th scope="col">Product Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{$images->product}} --}}
                        @foreach ($images as $image)
                        <tr>
                            <th scope="row">
                                {{$image->id}}
                            </th>
                            <td>
                                {{$image->product->product_name}}
                            </td>
                            <td>
                                <img src="{{asset('images')}}/{{$image->product_image}}" width="65px" alt="{{$image->product->product_name}} Image">
                            </td>
                            <td>                       
                                <a href="{{ route('products.show', ['product' => $image->product->id]) }}">{{$image->product->product_name}}</a>
                            </td>
                            <td>
                                <a href="{{$image->path()}}">
                                    <button type="button" class="btn btn-info">
                                        Show
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/image/{{$image->id}}/edit">
                                    <button type="button" class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="/image/{{$image->id}}" method="POST">
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
                {{ $productImages->links('pagination::custom') }}
            </div>
        </div>
    </div>
@endsection