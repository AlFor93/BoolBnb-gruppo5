@extends('index.index')

@section('content')

  <form action="{{ route('save.flat') }}" method="post">
    @csrf
    @method('POST')
    <h2>Inserisci nuovo appartamento</h2>
    <p><input type="text" name="" placeholder="Nome appartamento" value=""></p>
    <p><input type="text" name="" placeholder="Numero di stanze" value=""></p>
    <p><input type="text" name="" placeholder="Metri quadri" value=""></p>
    <p><input type="text" name="" placeholder="indirizzo" value=""></p>
    <p><input type="text" name="" placeholder="prezzo" value=""></p>
    <p>Di Quali servizi dispone l'appartamento? </p>
      @foreach ($services as $service)
        <input type="checkbox" name="categories[]" value="{{$service->id}}">{{$service->name}} <br>

      @endforeach
    <button type="submit" >Aggiungi appartamento</button>

  </form>



@stop
