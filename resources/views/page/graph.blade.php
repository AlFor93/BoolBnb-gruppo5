@extends('index.index')

@section('content')
  <div class="main-update">
    <form class="update-form" action="{{route('update.flat', $flat->id)}}" method="post">
      @csrf
      @method('PATCH')

      <input id="flat_name" type="text" name="flat_name" placeholder="Nome appartamento" value="{{$flat->flat_name}}" autofocus>
      <input id="number_of_rooms" type="text" name="number_of_rooms" placeholder="Numero di stanze" value="{{$flat->number_of_rooms}}">
      <input id="mq" type="text" name="mq" placeholder="Metri quadri" value="{{$flat->mq}}">
      <input id="address" type="text" name="address" placeholder="Indirizzo" value="{{$flat->address}}">
      <input id="city" type="text" name="city" placeholder="Città" value="{{$flat->city}}">
      <input id="flat_price" type="text" name="flat_price" placeholder="Prezzo" placeholder="Prezzo" value="{{$flat->flat_price}}">

      <div class="service">
      @foreach($allServId as $servId)
        <p><input type="checkbox" name="services[]" value="{{$servId->id}}">{{$servId->name}}</p>

      @endforeach
      @foreach($checkedServices as $service)
        <p><input type="checkbox" checked name="services[]" value="{{$service->id}}">{{$service->name}}</p>

      @endforeach
      </div>
      <a href="#">upload image</a>
      <button type="submit" name="button">Update flat</button> <br>
    </form>
</div>



@stop
