@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container d-flex">
            <div class="left-container">
                <div>
                    <center> <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" width="280px" height="300px"
                            style="margin-top: 60px;" />
                    </center>
                    <center>
                        <H1
                            style="font-family: Viga; color:white; font-size: 80px; margin-top: 8%; display: block; text-shadow: 0 8px 9px #202e41, 0px -2px 1px #fff;">
                            S P E C</H1>
                        <h4 style="font-family: Inder; color: white">Build your perfect API Specification.</h4>
                    </center>
                </div>
            </div>
            <div class="right-container">
                <div class="outer-frame ">
                    <div style="margin-top:2%; margin-left: 38%;color: white;">
                        <h3 style="font-weight: bold; font-family:Inter; font-size:30px">Sign in</h3>
                    </div>
                    <div class="inner-frame d-flex align-items-center justify-content-center" style="margin-top: -5px">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class=" col-form-label"
                                    style="margin-left: 12%; font-size: 18px; color: white">{{ __('Email') }}</label>
                                <div>
                                    <div class="input-field" style="margin-left: 12%;">
                                        <input id="email" type="email" style="width: 300px; height: 40px;"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-form-label"
                                    style="margin-left: 12%; font-size: 18px; color: white">{{ __('Password') }}</label>
                                <div>
                                    <div class="input-field" style="margin-left: 12%;">
                                        <!-- Adjusted column size to fit the form -->
                                        <input id="password" type="password" style="width: 300px; height: 40px;"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div style="margin-right: 62%;">
                                <div class="col-md-8 offset-md-4">
                                    <div class="form-check" style="width: 150px;">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember"
                                            style="color: white; margin-top:0.5%;">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success"
                                        style="margin-left:3.5%; margin-top: 10%; background-color: #06D6A0; border-color:#06D6A0; width: 100px; font-size: 18px;">
                                        {{ __('Sign in') }}
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
