@extends('index.index')

@section('content')

  @foreach($flats as $flat)

  <a href="{{ route('show.flat',$flat->id) }}">
    {{$flat->flat_name}}
  </a>
  @endforeach

@stop
