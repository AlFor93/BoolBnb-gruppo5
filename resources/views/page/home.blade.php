@extends('index.index')

@section('content')



  <div class="main-home">
    <h1>questo è il corpo</h1>
  </div>

  @foreach($flats as $flat)

      <div class="flats">

        <h1>{{$flat->name}} {{$flat->address}}</h1><br>
        <div class="">
          <img src="{{$flat->img_file}}" alt="">
        </div>


      </div>


  @endforeach
@stop
