@extends('dashboard.layout.main')

@section('title', 'Manage Admin')

@section('page-header')
<nav class="navbar navbar-expand">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav">
        <li class="nav-item small-screens-sidebar-link">
            <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
        </li>
        <li class="nav-item nav-profile dropdown">
            @if(Auth::guard('admin')->check()) 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img 
                        src="{{asset('images')}}/{{Auth::guard('admin')->user()->image}}" 
                        width="65px" 
                        alt="{{Auth::guard('admin')->user()->name}} profile image"
                    >
                    <span>{{Auth::guard('admin')->user()->name}}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin/{{Auth::guard('admin')->user()->id}}">Account</a>
                    <a class="dropdown-item" href="#">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </a>
                </div>
            @endif
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
            </li> --}}
            <li class="nav-item">
                <a href="#" class="nav-link" id="dark-theme-toggle">
                    <i class="material-icons-outlined">brightness_6</i>
                    <i class="material-icons">brightness_6</i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-search">
        <form action="/admin/search" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="search" id="nav-search" placeholder="Search...">
            </div>
        </form>
    </div>
</nav>
@endsection

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/admin">Admins</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/admin/create" class="btn btn-primary">Add New Admin</a>
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
                <h5 class="card-title">Admins Data</h5>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <th scope="row">
                                    {{$admin['id']}}
                                </th>
                                <td>
                                    {{$admin['name']}}
                                </td>
                                <td>
                                    {{$admin['email']}}
                                </td>
                                <td>
                                    <img 
                                        src="{{asset('images')}}/{{$admin->image}}" 
                                        width="65px" 
                                        alt="{{$admin['name']}} Image"
                                    >
                                </td>
                                <td>
                                    <a href="{{$admin->path()}}">
                                        <button type="submit" class="btn btn-info">
                                            Show
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/admin/{{$admin->id}}/edit">
                                        <button type="button" class="btn btn-warning">
                                            Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="/admin/{{$admin->id}}" method="POST">
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
            </div>
        </div>
    </div>
@endsection