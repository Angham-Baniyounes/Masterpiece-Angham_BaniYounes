@extends('dashboard.layout.main')
@section('title', 'Our Users')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/users">Users</a></li>
        </ol>
    </nav>
    <div class="page-options">
        {{-- <a href="/admins" class="btn btn-primary">Admins</a> --}}
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
                <h5 class="card-title">Users Data</h5>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        {{-- $table->string('name');
            $table->string('email')->unique();
            $table->string('user_mobile')->unique();
            $table->string('user_image')->nullable()->default('default.png');
            $table->string('user_address'); --}}
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Image</th>
                            <th scope="col">Address</th>
                            <th scope="col">Show</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">
                                    {{$user['id']}}
                                </th>
                                <td>
                                    {{$user['name']}}
                                </td>
                                <td>
                                    {{$user['email']}}
                                </td>
                                <td>
                                    {{$user['user_mobile']}}
                                </td>
                                <td>
                                    <img 
                                        src="{{asset('images')}}/{{$user->user_image}}" 
                                        width="65px" 
                                        alt="{{$user['name']}} Image"
                                    >
                                </td>
                                <td>
                                    {{$user['user_address']}}
                                </td>
                                <td>
                                    <a href="{{$user->path()}}">
                                        <button type="submit" class="btn btn-info">
                                            Show
                                        </button>
                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>       
            </div>
        </div>
    </div>
@endsection