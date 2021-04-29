@extends('dashboard.layout.main')

@section('title', 'Manage Categories')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/categories">Category</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/categories/create" class="btn btn-primary">Add New Category</a>
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
                <h5 class="card-title">Categories Data</h5>
                <table class="table table-striped table-responsive" id="categoriesTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Desctiption</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">
                                    {{$category->id}}
                                </th>
                                <td>
                                    {{$category->category_name}}
                                </td>
                                <td>
                                    <img src="{{asset('images')}}/{{$category->category_image}}" width="65px" alt="{{$category->category_name}} Image">
                                </td>
                                <td>
                                    {{ $category->category_description}}
                                </td>
                                <td>
                                    <a href="{{$category->path()}}">
                                        <button type="button" class="btn btn-info">
                                            Show
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/categories/{{$category->id}}/edit">
                                        <button type="button" class="btn btn-warning">
                                            Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="/categories/{{$category->id}}" method="POST">
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
                {{ $categories->links('pagination::custom') }}
            </div>
        </div>
    </div>
@endsection