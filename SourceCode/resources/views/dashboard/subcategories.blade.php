@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12 mb-5 subForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Add New SubCategory</h3>
            </div>
            <div class="card-body">
                <form action='/subcategory/addSubcategory' method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Name</label>
                        <input type="text" name="name" placeholder="Subcategory Name" class="form-control">
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Image</label>
                        <input type="file" name="img" placeholder="Upload Image" class="form-control">
                        @error('img')
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
                        <label class="form-control-label text-uppercase">Category Type</label>
                        <select class="custom-select form-control" name="category_id">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                        </select>
                        @error('category_id')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
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
                <h5 class="card-title">Subcategories Data</h5>
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category Type</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{-- {{$subcategory['id']}} --}}
                            </th>
                            <td>
                                {{-- {{$subcategory['name']}} --}}
                            </td>
                            <td>
                                {{-- <img src="/images/{{$subcategory['img']}}" width="65px" alt="{{$subcategory['name']}} Image"> --}}
                            </td>
                            <td>
                                {{-- {{$subcategory['description']}} --}}
                            </td>
                            <td>
                                {{-- <a href="/subcategories/editsubcategory/{{$subcategory['id']}}/editadmin">
                                    <button type="button" class="btn btn-warning">
                                        Edit
                                    </button>
                                </a> --}}
                            </td>
                            <td>
                                {{-- <a href="/subcategories/delete/{{$subcategory['id']}}">
                                    <button type="button" class="btn btn-danger">
                                        Delete
                                    </button>
                                </a> --}}
                            </td>
                        </tr>
                    </tbody>
                </table>       
            </div>
        </div>
    </div>
@endsection