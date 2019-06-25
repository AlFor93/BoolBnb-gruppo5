@extends('index.index')

@section('content')

  @foreach($flats as $flat)
  <div class="">
    {{$flat->flat_name}}
  </div>
  @endforeach

@stop
