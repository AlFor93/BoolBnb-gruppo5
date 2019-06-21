@extends('index.index')

@section('content')



  <div class="main-home">
    <h1>questo è il corpo</h1>
    <h1>secondo corpo</h1>
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
