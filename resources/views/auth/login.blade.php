@extends('layouts.app')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<style>
    .container{
        height: 80vh !important;
    }
</style> 

<title>Login</title>
 
@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="card loginLeft">
                <div class="card-body">
                    <h1 class="title">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                            <br>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@domain.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <br>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="at least 6 characters">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Keep me logged in') }}
                                    </label>
                                </div>

                                <div class="loginGroup">
                                <button type="submit" class="btn btn-primary loginn">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                Don't have an account? <a class="sign" href="/register">Sign up</a>
                                <br>
                                {{-- @if (Route::has('password.request'))
                                    <a class="sign" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                    </form>
                </div>
            </div>
            <div class="loginRight">
                <img src="{{asset('asset/loginImg.jpg')}}" alt="" class="registerImg"> 
            </div>
        </div>
    </div>
@endsection
