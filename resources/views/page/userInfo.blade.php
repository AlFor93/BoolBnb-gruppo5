
@extends('index.index')

@section('content')

  <div class="userInfo-container">

    <div class="user-info-title">
      Benvenuto <strong>{{$thisUser->name}}, </strong> ecco la lista dei tuoi appartamenti.
    </div>

    <div class="table">
      <div class="table-head">
        <span>Nome</span>
        <span>Indirizzo</span>
        <span>Citta</span>
        <span>Superficie(mq)</span>
        <span>Stanze</span>
        <span>Edit Details</span>
        <span>Controlla messaggi</span>
        <span>Elimina</span>
      </div class="table-head">
      @foreach($flats as $flat)

            <div class="table-content">
              <span>{{$flat->flat_name}}</span>
              <span>{{$flat->address}}</span>
              <span>{{$flat->city}}</span>
              <span>{{$flat->mq}}</span>
              <span>{{$flat->number_of_rooms}}</span>

              <span><a href="{{route('show.graph',$flat->id)}}"><i class="fas fa-eye"></i></a></span>

              <span><a href="{{route('show.MyMessages', $flat->id)}}">vedi messaggi app</a></span>

              <span>
                <form class="" action="{{route('delete.flat',$flat->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                      <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>            
                </form>
              </span>

            </div class="table-content">
      @endforeach
    </div class="table">
  </div>



  <a href="{{route('add.flat')}}">aggiungi appartamento</a>



@stop
