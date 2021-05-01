@extends('layouts.admin-layout')

@section('content')
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="auth-form p-0">
                        <div class="row  justify-content-center">
                            <div class="col" style="opacity: 0.92">
                                <div class="card p-3">
                                <div class="logo-box"><a href="#" class="logo-text">{{ __('Admin Login') }}</a></div>
                                <form action="{{ route('admin.login.submit') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                        <input 
                                            type="email" 
                                            id="email" 
                                            aria-describedby="emailHelp" 
                                            placeholder="adminname@example.com"
                                            class="form-control @error('email') is-invalid @enderror" 
                                            name="email" 
                                            value="{{ old('email') }}" 
                                            required 
                                            autocomplete="email" 
                                            autofocus
                                        />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>
                                        <input 
                                            id="password" 
                                            type="password" 
                                            class="form-control @error('password') is-invalid @enderror" 
                                            name="password" 
                                            placeholder="********"
                                            required autocomplete="current-password"
                                        />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block btn-submit" style="background: #25360a;">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row p-3">
                                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                                            <a class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </a>
            
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link text-left p-0" href="{{ route('admin.password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection