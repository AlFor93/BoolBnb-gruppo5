<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- geolocate --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
     integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
     crossorigin=""/>

     <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
     integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
     crossorigin=""></script>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    {{-- google FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <title>BoolBnb</title>
  </head>
  <body>

    <header class="header">
      <div class="header-searchbar">
        <a href="{{route('BoolHome')}}">
          <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkkmRZsjv6wH5v_xdl3D4a9N2EKaMUABeZAZu0S2hGha14pmaF" alt="">
        </a>

        <form class="searchbar" action="{{route('search.flat')}}" method="get">
          <input type="text" name="city" value="">
          <i class="fas fa-search"></i>
          <button type="submit" name="button">Cerca</button>
        </form>

      </div>
      <div class="login-form">
        <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            @guest
                  <a class="login-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              @if (Route::has('register'))
                  <a class="login-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif

            @else
                  <a class="login-link" id="navbarDropdown" href="{{ route('show.user', Auth::user()->name) }}" role="button" data-toggle="dropdown">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div>
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
      <div class="footer">
        <div class="footer-box">
          <strong>BoolBnb</strong>
          <p>Opportunità di Lavoro</p>
          <p>Stampa</p>
          <p>Condizioni</p>
          <p>Aiuto</p>
          <p>Diversità e appartenenza</p>
          <p>Accessiblità</p>
          <p>Informazioni di Contatto</p>
        </div>
        <div class="footer-box">
          <strong>BoolBnb</strong>
          <p>Opportunità di Lavoro</p>
          <p>Stampa</p>
          <p>Condizioni</p>
          <p>Aiuto</p>
          <p>Diversità e appartenenza</p>
          <p>Accessiblità</p>
          <p>Informazioni di Contatto</p>
        </div>
        <div class="footer-box">
          <strong>BoolBnb</strong>
          <p>Opportunità di Lavoro</p>
          <p>Stampa</p>
          <p>Condizioni</p>
          <p>Aiuto</p>
          <p>Diversità e appartenenza</p>
          <p>Accessiblità</p>
          <p>Informazioni di Contatto</p>
        </div>
        <div class="footer-box">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-facebook-f"></i>
          <p>Termini</p>
          <p>Privacy</p>
          <p>Mappa del sito</p>
        </div>
      </div>

      <hr>
      <div class="footer-bottom">
        <i class="fab fa-airbnb"></i>
        <span>© 2019 Boolbnb, Inc. All rights reserved.</span>
      </div>

    </footer>
  </body>
</html>
