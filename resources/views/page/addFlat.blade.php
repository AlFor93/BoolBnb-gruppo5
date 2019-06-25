@extends('index.index')

@section('content')

  <div class="main-UserInfo">
    <form class="saveFlat-form" action="{{ route('save.flat') }}" method="post">
      @csrf
      @method('POST')

      <h1>Creazione nuovo appartamento</h1>
      <input id="flat_name" type="text" name="flat_name" placeholder="Nome appartamento" value="" autofocus>
      <input id="number_of_rooms" type="text" name="number_of_rooms" placeholder="Numero di stanze" value="">
      <input id="mq" type="text" name="mq" placeholder="Metri quadri" value="">
      <input id="address" type="text" name="address" placeholder="Indirizzo" value="">
      <input id="city" type="text" name="city" placeholder="Città" value="">
      <input id="flat_price" type="text" name="flat_price" placeholder="Prezzo" value="">
      <div class="services">
        <h3>Servizi</h3>
        <div class="service">
          @foreach ($services as $service)
            <p><input type="checkbox" name="services[]" value="{{$service->id}}">{{$service->name}}</p>
          @endforeach
        </div>
      </div>
      <button type="submit" >Aggiungi appartamento</button>
    </form>
  </div>

@stop
