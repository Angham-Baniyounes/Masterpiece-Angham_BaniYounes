@extends('layouts.app')

@section('content')
<div class="container mt-5" style="font-family: Balsamiq Sans', cursive !important;">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style="font-size:18px; color:rgb(35, 169, 35)">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row  justify-content-center">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    placeholder="John Doe"
                                    autocomplete="name" 
                                    autofocus
                                >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    placeholder="username@example.com"
                                    autocomplete="email"
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <label for="user_mobile" class="col-md-4 col-form-label text-md-left">{{ __('Mobile Number') }}</label>
                            <div class="col-md-6">
                                <input 
                                    id="user_mobile" 
                                    type="tel" 
                                    class="form-control @error('user_mobile') is-invalid @enderror" 
                                    name="user_mobile" 
                                    value="{{ old('user_mobile') }}" 
                                    placeholder="+962777777777"
                                    autocomplete="mobile"
                                >
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <label for="user_address" class="col-md-4 col-form-label text-md-left">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input 
                                    id="user_address" 
                                    type="text" 
                                    class="form-control @error('user_address') is-invalid @enderror" 
                                    name="user_address" 
                                    placeholder="Amman Albayader"
                                    value="{{ old('user_address') }}" 
                                    autocomplete="address"
                                >
                                @error('user_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    placeholder="**********"
                                    autocomplete="new-password"
                                >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input 
                                    id="password-confirm" 
                                    type="password" 
                                    class="form-control" 
                                    name="password_confirmation" 
                                    placeholder="**********"
                                    required 
                                    autocomplete="new-password"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-0  justify-content-center d-flex">
                            <div class="col-md-12 col-lg-12  pt-3">
                                <button type="submit" class="btn btn-success" style="background-color: rgb(35, 169, 35); width:100%; font-size:18px;" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
