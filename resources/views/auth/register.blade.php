@extends('index.index')

@section('content')
  <div class="main-register">
    <form method="POST" class="register-form" action="{{ route('register') }}">
        @csrf

          {{-- Name input  --}}
          <input id="name" placeholder="Nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          {{-- Lastname input --}}
          <input id="lastname" placeholder="Cognome" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">

          @error('lastname')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

            {{-- Email input  --}}
            <input id="email" placeholder="Indirizzo email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{-- Password input --}}
            <input id="password" placeholder="Crea una password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{-- Password confirm input  --}}
            <input id="password-confirm" placeholder="Conferma password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            {{-- Date of birth input --}}
            <div class="date_of_birth">
              <h4>Data di nascita</h4>
              <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}"autocomplete="date_of_birth" autofocus>

              @error('date_of_birth')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

            {{-- Submit Button  --}}
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>

            {{-- Already registered --}}
            <div class="fake_row"></div>
            <div class="already_registered">
              <p>Hai già un account su Airbnb?</p>
              <a class="login-link" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
    </form>
  </div>
@endsection
