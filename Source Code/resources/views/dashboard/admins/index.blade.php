@extends('dashboard.layout.main')
@section('title', 'Manage Admin')

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