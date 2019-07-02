@extends('index.index')

@section('content')

  <h1>Lista messaggi</h1>

  @foreach($messages as $message)
    <div class="myMessage">
      <p>Utente: {{$message->sender}}</p>
      <div class="fake-row"></div>
      <span>{{$message->content}}</span>
    </div>
  @endforeach

@stop
