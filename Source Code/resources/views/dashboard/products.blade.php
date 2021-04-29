@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12 mb-5 subForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Add New Product</h3>
            </div>
            <div class="card-body">
                <form action='/product/addproduct' method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Name</label>
                        <input type="text" name="name" placeholder="Product Name" class="form-control">
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Primary Image</label>
                        <input type="file" name="primary_img" placeholder="Upload Primary Image" class="form-control">
                        @error('primary_img')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Price</label>
                        <input type="number" name="price" placeholder="Product Price" class="form-control">
                        @error('price')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Discount</label>
                        <input type="number" name="discount" placeholder="Product Discount" class="form-control">
                        @error('discount')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">State</label>
                        <select class="custom-select form-control" name="subcategory_id">
                            <option selected>Status</option>
                            <option value="0">Unavailable</option>
                            <option value="1">Available</option>
                        </select>
                        @error('description')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Description</label>
                        <input type="text" name="description" placeholder="description ..." class="form-control">
                        @error('description')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Subcategory Type</label>
                        <select class="custom-select form-control" name="subcategory_id">
                            <option selected>Select Subcategory Type</option>
                            <option value="1">One</option>
                        </select>
                        @error('category_id')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Images</label>
                        <input type="file" name="images[]" class="form-control" placeholder="product images"  multiple>
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
                        <button type="submit" class="btn btn-primary"> Add </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Products Data</h5>
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Primary Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{-- {{$product['id']}} --}}
                            </th>
                            <td>
                                {{-- {{$product['name']}} --}}
                            </td>
                            <td>
                                {{-- <img src="/images/{{$product['primary_img']}}" width="65px" alt="{{$product['name']}} Image"> --}}
                            </td>
                            <td>
                                {{-- {{$product['price']}} --}}
                            </td>
                            <td>
                                {{-- {{$product['discount']}} --}}
                            </td>
                            <td>
                                {{-- {{$product['status']}} --}}
                            </td>
                            <td>
                                {{-- {{$product['description']}} --}}
                            </td>
                            <td>
                                {{-- <img src="/images/{{$product['images']}}" width="65px" alt="{{$product['name']}} Image"> --}}
                                {{-- <img src="/images/{{$product['primary_img']}}" width="65px" alt="{{$product['name']}} Image"> --}}
                                {{-- <img src="/images/{{$product['primary_img']}}" width="65px" alt="{{$product['name']}} Image"> --}}
                            </td>
                            {{-- <td>
                                <a href="/product/editproduct/{{$product['id']}}/editproduct">
                                    <button type="button" class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/product/delete/{{$product['id']}}">
                                    <button type="button" class="btn btn-danger">
                                        Delete
                                    </button>
                                </a>
                            </td> --}}
                        </tr>
                    </tbody>
                </table>       
            </div>
        </div>
    </div>
@endsection