@extends('index.index')

@section('content')
  <div class="main-register">
    <form method="POST" action="{{ route('register') }}">
        @csrf

            {{-- Name input  --}}
            <label for="name" class="name">{{ __('Name') }}</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            {{-- Lastname input --}}
            <label for="lastname" class="lastname">{{ __('Lastname') }}</label>
              <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

              @error('lastname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              {{-- Email input  --}}
              <label for="email" class="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              {{-- Password input --}}
              <label for="password" class="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              {{-- Password confirm input  --}}
              <label for="password-confirm" class="password-comfirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

              {{-- Date of birth input --}}
              <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}"autocomplete="date_of_birth" autofocus>

                {{-- @error('date_of_birth')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}

              {{-- Submit Button  --}}
              <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
              </button>
    </form>
  </div>
@endsection
