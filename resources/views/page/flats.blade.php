@extends('index.index')

@section('content')

  <div class="main-flat">
    <div class="first-container">
      <div class="left">

      </div>
      <div class="right">
        <div class="first box">

        </div>
        <div class="second box">

        </div>
        <div class="third box">

        </div>
        <div class="fourth box">

        </div>
      </div>
    </div>
    <div class="second-container">
      <div class="left">
        {{-- Top left second container --}}
        <div class="top">
          <div class="info">
            <h1>{{$flat[0]->flat_name}}</h1>
            <p>{{$flat[0]->address}}</p>
          </div>
          <div class="user">
            <div class="photo">

            </div>
            <span>{{$flat[0]->name}} {{$flat[0]->lastname}}</span>
          </div>
        </div>
        {{-- Center left second container --}}
        <div class="center">
          <div class="service">
            <div class="left">
              <i class="fas fa-home"></i>
            </div>
            <div class="right">
              <h4>Intero appartamento</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            </div>
          </div>
          <div class="service">
            <div class="left">
              <i class="fas fa-spray-can"></i>
            </div>
            <div class="right">
              <h4>Pulizia perfetta</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            </div>
          </div>
          <div class="service">
            <div class="left">
              <i class="fas fa-key"></i>
            </div>
            <div class="right">
              <h4>Ottima esperienza di check-in</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt,consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            </div>
          </div>
        </div>
        {{-- Bottom left second container --}}
        <div class="bottom">
          <button type="button" name="button">Traduci questa descrizione in Italiano</button>
          <p>We are offering a clean, well presented and recently refurbished double studio situated in the heart of Madrid, Spain.<br> Sol square is just 2 minutes walk away, Also the studio is within walking distance to all major attractions and museums.</p>
          <div class="moreInfo">
            <span id="moreInfo">Leggi altre informazioni sullo spazio <i class="fas fa-angle-down"></i></span>
          </div>
          <span>Contatta l'host</span>
        </div>
      </div>
      <div class="right">
        <ol>
          @foreach($services as $service)
            <li>{{$service->name}}</li>
          @endforeach
        </ol>
        @foreach($images as $image)
          <img src="{{$image->img_file}}" alt="">
        @endforeach
      </div>
    
    </div>




    <div class="test-container">

    </div>
  </div>

@stop
