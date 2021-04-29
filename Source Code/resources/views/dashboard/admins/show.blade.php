@extends('dashboard.layout.main')

@section('title', 'Admin Profile')

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
    <div class="profile-content">
        <div class="row adminDetails">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Info</h5>
                        <div class="col">
                            <div class="profile-img">
                                <img src="{{asset('images')}}/{{$admin->image}}" width="100" height="100" alt="{{$admin->name}} Admin Image">
                            </div>
                        </div>
                        <ul class="list-unstyled profile-about-list list-profile">
                            <li><i class="material-icons">admin_panel_settings</i><span>{{ $admin->name }}</span></li>
                            <li><i class="material-icons">mail_outline</i><span>{{ $admin->email }}</span></li>
                            <li><i class="material-icons">home</i><span>Lives in <a href="#">Amman, Jordan</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection