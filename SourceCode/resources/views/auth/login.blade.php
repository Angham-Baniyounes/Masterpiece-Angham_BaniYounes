@extends('layouts.app')

@section('content')
    <div class="connect-container align-content-stretch d-flex flex-wrap mt-5">
        <div class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="auth-form p-0">
                        <div class="row  justify-content-center">
                            <div class="col" style="opacity: 0.92">
                                <div class="card">
                                    <div class="logo-box card-header">
                                        <a href="#" class="logo-text" style="font-size:18px; color:rgb(35, 169, 35)">{{ __('Login') }}</a>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group row justify-content-center">
                                                {{-- Email --}}
                                                <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                                <div class="col-md-6">
                                                    <input 
                                                        type="email" 
                                                        id="email" 
                                                        class="form-control @error('email') is-invalid @enderror" 
                                                        name="email" 
                                                        value="{{ old('email') }}" 
                                                        required 
                                                        placeholder="username@example.com"
                                                        autocomplete="email" 
                                                        autofocus
                                                    />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                {{-- password --}}
                                            <div class="form-group row justify-content-center">
                                                <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>
                                                <div class="col-md-6">
                                                    <input 
                                                        id="password" 
                                                        type="password" 
                                                        class="form-control @error('password') is-invalid @enderror" 
                                                        name="password" 
                                                        required 
                                                        autocomplete="current-password"
                                                        placeholder="********"
                                                    />
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                

                                            {{-- remember --}}
                                            <div class="form-group row pt-3 justify-content-center pb-0" style="font-size:14px;">
                                                <div class="col-md-12 d-flex justify-content-around align-items-center">
                                                    <a class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </a>
                    
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link text-left p-0" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            {{-- btn --}}
                                            <div class="form-group row justify-content-center d-flex">
                                                <div class="col-md-12 col-md-12">
                                                    <button type="submit" class="btn btn-primary" style="width:100%;  font-size:18px; background-color:rgb(35, 169, 35); border-color:rgb(35, 169, 35);">
                                                        {{ __('Login') }}
                                                    </button>
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
    </div>
@endsection
