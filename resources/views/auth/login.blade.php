@extends('index.index')

@section('content')
  <div class="main-login">
    <form method="POST" class="login-form" action="{{ route('login') }}">
      @csrf
        {{-- Email input --}}
        <input id="email" type="email" placeholder="Indirizzo email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        {{-- Password input --}}
        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        {{-- Remember checkbox --}}
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
          </label>
        </div>

        {{-- Submit button --}}
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a>
        @endif

        {{-- Not registered --}}
        <div class="fake_row"></div>
        <div class="not_registered">
          <p>Non hai un account?</p>
          <a class="login-link" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </form>
  </div>

@endsection
