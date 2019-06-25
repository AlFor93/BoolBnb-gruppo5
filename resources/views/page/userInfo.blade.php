
@extends('index.index')

@section('content')

  <div class="">
    <h1>prfilo</h1>
  </div>

  <table>
    <tr>
      <td>nome</td>
      <td>indirizzo</td>
      <td>citta</td>
      <td>mq</td>
      <td>stanze</td>
      <td>servizi</td>
    </tr>
    @foreach($flats as $flat)
      <tr>
        <td>{{$flat->flat_name}}</td>
        <td>{{$flat->address}}</td>
        <td>{{$flat->city}}</td>
        <td>{{$flat->mq}}</td>
        <td>{{$flat->number_of_rooms}}</td>
        <td>
          @if($flat->flat_id)
            {{$flat->name}}
          @endif
        </td>
      </tr>
    @endforeach
  </table>


  <a href="{{route('add.flat')}}">aggiungi appartamento</a>

@stop
