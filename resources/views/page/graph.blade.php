@extends('index.index')

@section('content')

  <h1>nome appartamento: {{$flat->flat_name}}</h1>
  <h1>indirizzo: {{$flat->address}}</h1>
  <h1>citta: {{$flat->city}}</h1>
  <h1>mq: {{$flat->mq}}</h1>
  <h1>numero stanze: {{$flat->number_of_rooms}}</h1>


  <a href="#">upload image</a>



  @foreach ($services as $service)
    <p><input type="checkbox" name="services[]" value="{{$service->id}}">{{$service->name}}</p>
  @endforeach

@stop
