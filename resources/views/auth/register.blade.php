@extends('layouts.app')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<title>Register</title>
<style>
    .container{
        height: 100vh !important;
        padding: 0;
        margin: 0;
    }
</style>
@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="loginRight">
            <img src="{{asset('asset/registerImg.jpg')}}" alt="" class="registerImg"> 
        </div>

        {{-- <div class="col-md-8"> --}}
            <div class="card">

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}" class="registerForm">
                        @csrf
                        <h1 class="title">Register</h1>

                        <div class="registerContainer">

                        <div class="register1">
                            <label for="name" class="">{{ __('Name') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <label for="address" class="">{{ __('Address') }}</label>

                            <div class="">
                                <input id="address" type="text" class="form-control" name="address">
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <label for="gender" class="">{{ __('Gender') }}</label>
                            <br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male" class="genderLabel">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female" class="genderLabel">Female</label><br>
                        {{-- </div> --}}
                        
                        {{-- <div class="form-group row"> --}}
                            <label for="DOB" class="">{{ __('Date of Birth') }}</label>

                            <div class="">
                                <input id="DOB" type="date" class="form-control" name="DOB">
                            </div>
                        </div>
                        
                        <div class="register1">
                            <label for="nik" class="">{{ __('NIK') }}</label>

                            <div class="">
                                <input id="nik" type="text" class="form-control" name="nik">
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <label for="assurance" class="">{{ __('Assurance (optional)') }}</label>

                            <div class="">
                                <input id="assurance" type="text" class="form-control" name="assurance">
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <label for="password" class="">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            <label for="password_confirm" class="">{{ __('Password Confirmation') }}</label>

                            <div class="">
                                <input id="password_confirm" type="password" class="form-control" name="password_confirm">
                            </div>
                        </div>

                    </div>

                        {{-- <div class="form-group row"> --}}
                                <button class="btn btn-primary registerr">        
                            {{ __('Register') }}
                                </button>
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
        {{-- </div> --}}
        @endsection