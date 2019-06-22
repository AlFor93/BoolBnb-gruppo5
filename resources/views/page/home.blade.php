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

  @foreach($flats as $flat)

      <div class="flats">


        <h1><a href="{{route('show.flat',$flat->id)}}">{{$flat->flat_name}}</a> {{$flat->address}}</h1><br>
        <div class="">
          @foreach($images as $image)
            @if($flat->flat_id==$image->flat_id)
              <img src="{{$image->img_file}}" alt="">
            @endif
          @endforeach
        </div>

      </div>

      </div>


  @endforeach
@stop
