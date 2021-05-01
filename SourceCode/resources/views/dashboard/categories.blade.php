@extends('dashboard.layout.main')
@section('content')
<div class="col-xl">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Categories Data</h5>
            <table class="table table-striped ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            {{-- {{$category['id']}} --}}
                        </th>
                        <td>
                            {{-- {{$category['name']}} --}}
                        </td>
                        <td>
                            {{-- <img src="/images/{{$category['img']}}" width="65px" alt="{{$category['fullName']}} Image"> --}}
                        </td>
                        <td>
                            {{-- {{$category['description']}} --}}
                        </td>
                        {{-- <td>
                            <a href="/category/editcategory/{{$category['id']}}/editcategory">
                                <button type="button" class="btn btn-warning">
                                    Edit
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="/category/delete/{{$category['id']}}">
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