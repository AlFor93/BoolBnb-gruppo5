@extends('index.index')

@section('content')

  <div class="search-flat-title">
    <span>Risultati della ricerca effettuata a: <strong id="flat-search-result">{{$city}}</strong> </span>
  </div>

  <div class="flat-search-result">

    <ul>
      @foreach($flats as $flat)
      <li><a href="{{ route('show.flat',$flat->id) }}">
        {{$flat->flat_name}}
      </a></li> <br>
      @endforeach
    </ul>

  </div>


@stop
