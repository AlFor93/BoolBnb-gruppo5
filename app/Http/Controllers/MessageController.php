<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

use App\Flat;
use App\User;
use App\Message;
use Auth;


class MessageController extends Controller
{

  function newMessage($id){

    if (Auth::check() ) {
      $inputAuthor= Auth::user()->id;
      $registeredUser= User::where('id','=',$inputAuthor)->first();
    } else {
      $inputAuthor = "";
      $registeredUser = "";
    }


    // dd($registeredUser);

    $flat = Flat::where('id', $id )->get()->first();
    // dd($flat);
    $user = User::where('id', $flat->user_id)->get()->first();
     // dd($user);
    return view ('page.showMessage', compact('registeredUser', 'flat', 'user') );
  }

  function storeMessage(MessageRequest $request, $id ){

    $flat = Flat::where('id', $id )->get()->first();
    $user = User::where('id', $flat->user_id)->get()->first();

    $validatedData = $request->validated();

    $message = new Message;

    $message->content = $validatedData['content'];
    $message->sender = $validatedData['sender'];
    $message->sent_date = date('y-m-d');
    $message->flat()->associate($flat->id);
    $message->user()->associate($user->id);

    $message->save();

    return redirect()->back()->withSuccess('Messaggio Inviato Con successo!');





    // $message = new Message();
    // $message->content = $validatedData('message_content');
    // $message->sender = $validatedData('sender_mail');
    // $message->sent_date = $validatedData('sender_mail');
    // $message->sender = $request->sender;
    // $message->sent_date = date('m-d');
    // $message->user_id = (int)$request->user_id;
    // $message->rental_id = (int)$request->rental_id;
    //
    // $message->user()->associate($user->id);
    //
    // $message->save();
  }


}
