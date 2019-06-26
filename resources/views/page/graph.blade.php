@extends('index.index')

@section('content')

  <form class="" action="{{route('update.flat', $flat->id)}}" method="post">
    @csrf
    @method('PATCH')

    <input id="flat_name" type="text" name="flat_name" value="{{$flat->flat_name}}" autofocus>
    <input id="number_of_rooms" type="text" name="number_of_rooms" value="{{$flat->number_of_rooms}}">
    <input id="mq" type="text" name="mq" value="{{$flat->mq}}">
    <input id="address" type="text" name="address" value="{{$flat->address}}">
    <input id="city" type="text" name="city" value="{{$flat->city}}">
    <input id="flat_price" type="text" name="flat_price" placeholder="Prezzo" value="{{$flat->flat_price}}">
    <button type="submit" name="button">update flat</button> <br>

    @foreach($allServId as $servId)
      <p><input type="checkbox" name="services[]" value="{{$servId->id}}">{{$servId->name}}</p>

    @endforeach
    @foreach($checkedServices as $service)
      <p><input type="checkbox" checked name="services[]" value="{{$service->id}}">{{$service->name}}</p>


    @endforeach
  </form>


  <a href="#">upload image</a>




@stop
