@extends('dashboard.layout.main')

@section('title', 'User Profile')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/users">Users</a></li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="/users" class="btn btn-primary">Users</a>
    </div>
@endsection

@section('content')
    <div class="profile-content">
        <div class="row adminDetails">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Info</h5>
                        <div class="col">
                            <div class="profile-img">
                                <img src="{{asset('images')}}/{{$user->user_image}}" width="100" height="100" alt="{{$user->name}} Admin Image">
                            </div>
                        </div>
                        <ul class="list-unstyled profile-about-list list-profile">
                            <li>
                                <i class="material-icons">account_circle</i>
                                <span>
                                    <h5 class="font-weight-bold">User Name : </h5>
                                    <p>{{$user->name}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons">mail_outline</i>
                                <span>
                                    <h5 class="font-weight-bold">User Email : </h5>
                                    <p>{{$user->email}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i>
                                <span>
                                    <h5 class="font-weight-bold">User Mobile : </h5>
                                    <p>{{$user->user_mobile}}</p>
                                </span>
                            </li>
                            <li>
                                <i class="material-icons">home</i>
                                <span>
                                    <h5 class="font-weight-bold">User Address : </h5>
                                    <p>{{$user->user_address}}</p>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection