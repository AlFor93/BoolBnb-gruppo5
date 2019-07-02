
@extends('index.index')

@section('content')

  <div class="">
    <h1>Profilo</h1>
  </div>

  <table>
    <tr>
      <td>nome</td>
      <td>indirizzo</td>
      <td>citta</td>
      <td>mq</td>
      <td>stanze</td>
      <td>show/edit detail</td>
      <td>elimina</td>
    </tr>
    @foreach($flats as $flat)

          <tr>
            <td>{{$flat->flat_name}}</td>
            <td>{{$flat->address}}</td>
            <td>{{$flat->city}}</td>
            <td>{{$flat->mq}}</td>
            <td>{{$flat->number_of_rooms}}</td>

            <td><a href="{{route('show.graph',$flat->id)}}"><i class="fas fa-eye"></i></a></td>

            <form class="" action="{{route('delete.flat',$flat->id)}}" method="post">
              @csrf
              @method('DELETE')
                <td>

                  <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>
                </td>
            </form>

          </tr>
    @endforeach
  </table>


  <a href="{{route('add.flat')}}">aggiungi appartamento</a>

  <a href="{{route('show.MyMessages', $thisUser->id)}}">controlla messaggi</a>

@stop
