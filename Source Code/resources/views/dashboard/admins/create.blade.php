@extends('dashboard.layout.main')

@section('title', 'Add New Admin')

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
            <h3 class="h6 text-uppercase mb-0">Create New Admin</h3>
        </div>
        <div class="card-body">
            <form action='/admin' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Full Name</label>
                    <input 
                        class="form-control @error('name')border-danger @enderror"
                        type="text" 
                        name="name" 
                        placeholder="Angham Bani Younes" 
                        value="{{old('name')}}" 
                    />
                    @error('name')
                        <small class='text-danger'>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Email</label>
                    <input 
                        class="form-control @error('email')border-danger @enderror"
                        type="email" 
                        name="email" 
                        placeholder="angham@admin.com" 
                        value="{{old('email')}}" 
                    />
                    @error('email')
                        <small class='text-danger'>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label text-uppercase">Image</label>
                    <input 
                        class="form-control @error('image')border-danger @enderror"
                        type="file" 
                        name="image" 
                        placeholder="Upload Image" 
                        value="{{old('image')}}" 
                    />
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
                        placeholder="********" 
                    />
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
@endsection