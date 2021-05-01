@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12 mb-5 adminForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Update Data of Admin</h3>
            </div>
            <div class="card-body">
                <form action='{{route('admin.updateadmin',$admin['id'])}}' method='POST' enctype="multipart/form-data">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Full Name</label>
                        <input type="text" name="fullName" placeholder="Full Name" class="form-control" value="{{$admin['fullName']}}" >
                        @error('fullName')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Email</label>
                        <input type="email" name="email" placeholder="Email Address" class="form-control" value="{{$admin['email']}}">
                        @error('email')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Image</label>
                        <input type="file" name="img" placeholder="Upload Image" class="form-control" value="{{$admin['img']}}">
                        @error('img')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" value="{{$admin['password']}}">
                        @error('password')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection