@extends('index.index')

@section('content')

  <form action="{{ route('save.flat') }}" method="post">
    @csrf
    @method('POST')
    <h2> Inserisci nuovo appartamento</h2>
    <p><label for="flat_name">Nome appartamento</label> <input type="text" name="flat_name" placeholder="Nome appartamento" value=""></p>
    <p><label for="number_of_rooms">Numero di stanze</label> <input type="text" name="number_of_rooms" placeholder="Numero di stanze" value=""></p>
    <p><label for="mq">Superficie (mq)</label> <input type="text" name="mq" placeholder="Metri quadri" value=""></p>
    <p><label for="address">Indirizzo</label> <input type="text" name="address" placeholder="indirizzo" value=""></p>
    <p><label for="flat_price">Prezzo</label> <input type="text" name="flat_price" placeholder="prezzo" value=""></p>
    <p>Di Quali servizi dispone l'appartamento? </p>

      @foreach ($services as $service)
        <input type="checkbox" name="services[]" value="{{$service->id}}"> {{$service->name}} <br>
      @endforeach
    <button type="submit" >Aggiungi appartamento</button>

  </form>



@stop
