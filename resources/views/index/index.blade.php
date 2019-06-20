<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>BoolBnb Home</title>
  </head>
  <body>

    <header class="header-home">
      <div class="header-searchbar">
        <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkkmRZsjv6wH5v_xdl3D4a9N2EKaMUABeZAZu0S2hGha14pmaF" alt="">
        <input type="text" name="" value="">
      </div>
      <div class="login-form">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </div>


    </header>

    @yield('content')

    <footer>
      <h1>questo è il footer</h1>
    </footer>
  </body>
</html>
