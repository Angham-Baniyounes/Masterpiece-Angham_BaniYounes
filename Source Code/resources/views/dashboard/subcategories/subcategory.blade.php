@extends('dashboard.layout.main')

@section('title', 'Manage Subcategories')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/subcategories">Subcategory</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/subcategories/create" class="btn btn-primary">Add New Subcategory</a>
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
                <h5 class="card-title">Subcategories Data</h5>
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category Type</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory)
                            <tr>
                                <th scope="row">
                                    {{$subcategory->id}}
                                </th>
                                <td>
                                    {{$subcategory->subcategory_name}}
                                </td>
                                <td>
                                    {{$subcategory->subcategory_description}}
                                </td>
                                <td>
                                    <img 
                                        src="{{asset('images')}}/{{$subcategory->subcategory_image}}" 
                                        width="65px" 
                                        alt="{{$subcategory->subcategory_name}} Image"
                                    />
                                </td>
                                <td>                       
                                    <a href="{{ route('categories.show', ['category' => $subcategory->category->id]) }}">{{$subcategory->category->category_name}}</a>
                                </td>
                                <td>
                                    <a href="{{$subcategory->path()}}">
                                        <button type="button" class="btn btn-info">
                                            Show
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/subcategories/{{$subcategory->id}}/edit">
                                        <button type="button" class="btn btn-warning">
                                            Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="/subcategories/{{$subcategory->id}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                
                        @endforeach
                    </tbody>
                </table>  
                {{ $subcategories->links('pagination::custom') }}
            </div>
        </div>
    </div>
@endsection