@extends('index.index')

@section('content')

  <h1>ecco la lista dei messaggi {{$user->name}}</h1><br>

  @foreach($messages as $message)
    <div class="">
      <h3></h3>
      <h3>l'utente {{$message->sender}} è interessato all'appartamento {{$flat->flat_name}} in via {{$flat->address}},{{$flat->city}}</h3>
      <h4>contenuto: {{$message->content}}</h4>
    </div><br><br>
  @endforeach
@stop
