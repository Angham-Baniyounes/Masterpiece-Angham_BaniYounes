@extends('dashboard.layout.main')

@section('title', 'Update Admin')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/admin">Admins</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/admin" class="btn btn-primary">Admins</a>
    </div>
@endsection

@section('content')
    <div class="col-lg-12 mb-5 adminForm">
        <div class="card">
            <div class="card-header">
                <h3 class="h6 text-uppercase mb-0">Update Admin</h3>
            </div>
            <div class="card-body">
                <form action='{{route('admin.show',$admin['id'])}}' method='POST' enctype="multipart/form-data">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Full Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Full Name" 
                            class="form-control @error('name')border-danger @enderror" 
                            value="{{$admin->name}}" 
                        />
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Email Address" 
                            class="form-control @error('email')border-danger @enderror" 
                            value="{{$admin->email}}"
                        >
                        @error('email')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Image</label>
                        <input 
                            type="file" 
                            name="image" 
                            placeholder="Upload Image" 
                            class="form-control @error('image')border-danger @enderror" 
                            value="{{$admin->image}}"
                        />
                        <!-- <img src="{{asset('images')}}/{{$admin->image}}" width="100" height="100">                        -->
                        @error('image')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Password</label>
                        <input 
                            class="form-control @error('password')border-danger @enderror"
                            type="password" 
                            name="password" 
                            placeholder="Password" 
                        >
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