@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="right-container d-flex">
            <div class="left-container ml-4">
                <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" width="280px" height="300px" />
                <div class="left-rectangle"></div>
            </div>
            <div class="outer-frame d-flex align-items-center justify-content-center">
                <div class="inner-frame d-flex align-items-center justify-content-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-8">
                                <div class="input-field">
                                    <input id="email" type="email" style="width: 300px; height: 40px;"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <i class='bx bx-user' style='color:#ffd166'  ></i>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-8">
                                <!-- Adjusted column size to fit the form -->
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class='bx bx-lock-alt' style='color:#ffd166' ></i>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right-rectangle"></div>
        </div>
    </div>
@endsection
