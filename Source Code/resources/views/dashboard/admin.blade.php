@extends('dashboard.layout.main')
@section('title', 'Manage Admin')

@section('content')
    <div class="col-lg-12 mb-5 adminForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Create New Admin</h3>
            </div>
            <div class="card-body">
                <form action='/admin/addAdmin' method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Full Name</label>
                        <input type="text" name="fullName" placeholder="Full Name" value="{{old('fullName')}}" class="form-control">
                        @error('fullName')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Email</label>
                        <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}" class="form-control">
                        @error('email')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Image</label>
                        <input type="file" name="img" placeholder="Upload Image" value="{{old('img')}}" class="form-control">
                        @error('img')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        @error('password')
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
                <h5 class="card-title">Admins Data</h5>
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{-- {{$admin['id']}} --}}
                            </th>
                            <td>
                                {{-- {{$admin['fullName']}} --}}
                            </td>
                            <td>
                                {{-- {{$admin['email']}} --}}
                            </td>
                            <td>
                                {{-- <img src="/images/{{$admin['img']}}" width="65px" alt="{{$admin['fullName']}} Image"> --}}
                            </td>
                            {{-- <td>
                                <a href="/admin/editadmin/{{$admin['id']}}/editadmin">
                                    <button type="button" class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/delete/{{$admin['id']}}">
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