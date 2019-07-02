@extends('index.index')

@section('content')
  <h1>PRPA</h1>

  <form class="" action="{{ route('save.message', $flat->id ) }}" method="post">
    @csrf
    @METHOD('POST')
    <input type="text" name="sender"
      @if ($registeredUser)
        value="{{$registeredUser->email}}"
      @endif
        value=""
        placeholder="tua mail">

    <input type="text" name="content" placeholder="scrivi messaggio" value="">

    <button type="submit" name="button">MANDA MESSAGGIO</button>
  </form>
  @if(session('success'))
    <h4>{{session('success')}}</h4>
  @endif
@stop
