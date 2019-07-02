@extends('index.index')

@section('content')



  {{-- <div class="main-home">
    <div class="wrapper">

      <div class="search-box">
        <h2>Prenota alloggi e attività unici.</h2>
        <p>DOVE</p>
        <p> <input type="text" name="" value=""> </p>
        <p>CHECK IN / CHECK OUT</p>
        <p><input type="text" name="" value=""><input type="text" name="" value=""></p>
        <p>OSPITI</p>
        <p> <input type="text" name="" value=""> </p>


      </div>
    </div>
  </div> --}}
  <h2 id="sponsored-flat-list">Consigliati Per Te: </h2>
  <div class="flats-wrap">
    @foreach($flats as $flat)

      @if ($flat->id % 4 == 0)
        <div class="sponsored-flat">
          <img src="{{$flat->img_file}}" alt="">
          <h3><a href="{{route('show.flat',$flat->flat_id)}}">{{$flat->flat_name}} - {{$flat->address}} - {{$flat->city}}</a> </h3><br>
        </div>
      @endif

    @endforeach
  </div>

  <div class="">
    <h2 id="all-flat-list">Cerca tutti gli appartamenti: </h2>
    <div class="not-sponsored-flats-wrap">
      @foreach($allFlats as $oneFlat)
        @if ($oneFlat->id % 4 == 0)
          <div class="not-sponsored-flat">
            <img src="{{$oneFlat->img_file}}" alt="">
            <h3><a href="{{route('show.flat',$oneFlat->flat_id)}}">{{$oneFlat->flat_name}}</a> {{$oneFlat->address}}</h3><br>

          </div>
        @endif
      @endforeach
    </div>

  </div>



@stop
