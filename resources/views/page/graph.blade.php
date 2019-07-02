@extends('index.index')

@section('content')
<div class="main-details">

  <form class="details-form" action="{{route('update.flat', $flat->id)}}" method="post">
    @csrf
    @method('PATCH')

    <input id="flat_name" type="text" name="flat_name" value="{{$flat->flat_name}}" autofocus>
    <input id="number_of_rooms" type="text" name="number_of_rooms" value="{{$flat->number_of_rooms}}">
    <input id="mq" type="text" name="mq" value="{{$flat->mq}}">
    <input id="address" type="text" name="address" value="{{$flat->address}}">
    <input id="city" type="text" name="city" value="{{$flat->city}}">
    <input id="flat_price" type="text" name="flat_price" placeholder="Prezzo" value="{{$flat->flat_price}}">
    <div class="service">
    @foreach($allServId as $servId)
      <p><input type="checkbox" name="services[]" value="{{$servId->id}}">{{$servId->name}}</p>

    @endforeach
    @foreach($checkedServices as $service)
      <p><input type="checkbox" checked name="services[]" value="{{$service->id}}">{{$service->name}}</p>

    @endforeach
    </div>
    <button type="submit" name="button">update flat</button> <br>
  </form>

    @if(count($errors)>0)
      <div class="alert alert-danger">
        upload validation error <br>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if($message= Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" name="" data-dismiss="alert">X</button>
        <strong>{{$message}}</strong>
      </div>
      <img src="/images/{{Session::get('path')}}" width="300" alt="">
    @endif

  {{-- <form enctype="multipart/form-data" method="post" action="{{url('/uploadImage')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <table class="table">
        <tr>
          <td width="40%" align="right"><label>select file for upload</label></td>
          <td width="30"><input type="file" name="select_file">/</td>
          <td width="30%" align="left"><input type="submit" name="upload" value="upload"></td>
        </tr>
        <tr>
          <td width="40%" align="right"></td>
          <td width="30"><span class="text-muted">jpeg,jpg,png,gif,svg</span></td>
          <td width="30%" align="left"></td>
        </tr>
      </table>
    </div>

  </form> --}}
</div>




@stop
