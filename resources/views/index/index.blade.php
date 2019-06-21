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
        <div class="searchbar">
          <input type="text" name="" value="">
          <i class="fas fa-search"></i>
        </div>

      </div>
      <div class="login-form">
      
        <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            @guest

                    <a class="login-link" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))

                        <a class="login-link" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                @endif
            @else

                    <a class="login-link" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

            @endguest
      </div>


    </header>

    @yield('content')

    <footer>
      <h1>questo è il footer</h1>
    </footer>
  </body>
</html>
