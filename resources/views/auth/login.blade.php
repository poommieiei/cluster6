@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="left-panel">
            <img src="assets/assets/for-cluster6/LOGO API.png" width="330px" height="338px">
            <div class="text" style="font-family: Viga; font-size:90px">S P E C</div>
            <div class="text" style="font-family: Inder; font-size:20px; margin-top: -15px;">Buid Your Perfect API
                Specification.</div>
        </div>
        <div class="right-panel">
            <h2>Sign in</h2>
            <div class="form-container">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="password">Email</label>
                  <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="button-container">
                  <button type="submit" class="btn">Sign In</button>
                </div>
              </form>
            </div>
          </div>
    </div>
@endsection
