@extends('layouts.404-layout')
@section('content')
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="container d-flex align-content-stretch flex-wrap">
            <div class="row">
                <div class="col d-flex align-content-stretch flex-wrap"">
                    <div class="error-page-image"></div>
                    <div class="error-page-text">
                        <h3>Oops.. Something went wrong</h3>
                        <p>It seems that the page you are looking for no longer exists.<br>We will try our best to fix this soon.</p>
                        <div class="error-page-actions">
                            <a href="/" class="btn btn-primary">Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection