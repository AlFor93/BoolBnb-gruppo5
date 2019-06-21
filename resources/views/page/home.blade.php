@extends('index.index')

@section('content')



  <div class="main-home">
    <h1>questo è il corpo</h1>
  </div>

  @foreach($flats as $flat)

      <div class="flats">

        @foreach ($flat as $data)
          {{-- <h1>{{$data->name}} {{$data->address}}</h1><br> --}}
          {{$data}}
          <div class="">

            {{-- <img src="{{$data->img_file}}" alt=""> --}}
          </div>
        @endforeach

        <h1>{{$flat->name}} {{$flat->address}}</h1><br>
        <div class="">
          <img src="{{$flat->img_file}}" alt="">
        </div>

      </div>

      </div>


  @endforeach
@stop
