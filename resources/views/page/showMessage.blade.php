@extends('index.index')

@section('content')
  <div class="main-sendMessage">
  <h1>Contatta {{ $user->name }}</h1>

  <form class="sendMessage" action="{{ route('save.message', $flat->id ) }}" method="post">
    @csrf
    @METHOD('POST')
    <input id="senderMail" type="text" name="sender" autofocus
      @if ($registeredUser)
        value="{{$registeredUser->email}}"
      @endif
        value=""
        placeholder="inserisci la tua mail">

    <textarea id="senderText" type="text" name="content" placeholder="scrivi messaggio" value=""></textarea>  
    <button type="submit" name="button">MANDA MESSAGGIO</button>
  </form>
  @if(session('success'))
    <h4>{{session('success')}}</h4>
  @endif
  </div>
@stop
