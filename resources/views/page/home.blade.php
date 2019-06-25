@extends('index.index')

@section('content')



  <div class="main-home">
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
  </div>

  <div class="flats-wrap">
    @foreach($flats as $flat)

        <div class="flat">

          <div class="">
            @foreach($images as $image)
              @if($flat->flat_id == $image->flat_id)
                <div class="">
                  <img src="{{$image->img_file}}" alt="">
                </div>
              @endif
            @endforeach
          </div>
          <h3><a href="{{route('show.flat',$flat->flat_id)}}">{{$flat->flat_name}}</a> {{$flat->address}}</h3><br>


        </div>
    @endforeach

    @foreach($allFlats as $oneFlat)
      <h1>{{$oneFlat->flat_name}}</h1>
    @endforeach
  </div>

@stop
