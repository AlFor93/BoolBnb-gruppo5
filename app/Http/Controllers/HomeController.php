<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlatRequest;

use Auth;
use App\Flat;
use App\Service;
use App\User;
use App\Image;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function showProfile(){

      // SELECT flats.flat_name,flats.number_of_rooms,flats.mq,flats.flat_price,
      // flats.user_id,services.name
      // FROM flat_service
      // JOIN flats ON flat_service.flat_id=flats.id
      // JOIN services ON flat_service.service_id=services.id


      $inputAuthor= Auth::user()->id;

      $flats = Flat::where('user_id','=',$inputAuthor)->get();
      // $flats=DB::table('flat_service')
      //           ->join('services','flat_service.service_id','=','services.id')
      //           ->join('flats','flat_service.flat_id','=','flats.id')
      //           ->where('flats.user_id',$inputAuthor)
      //           ->get();
      $thisUser=User::where('id',$inputAuthor)->get()->first();
      // dd($thisUser);

      return view('page.userInfo', compact('flats','thisUser'));
    }

    function saveNewFlat(FlatRequest $request ){

      $validatedData = $request->validated();

      $flat = new Flat;

      //Inserimento valori validati
      $flat->flat_name = $validatedData['flat_name'];
      $flat->number_of_rooms = $validatedData['number_of_rooms'];
      $flat->mq = $validatedData['mq'];
      $flat->address = $validatedData['address'];
      $flat->city = $validatedData['city'];
      $flat->flat_price = $validatedData['flat_price'];

      $inputAuthor= Auth::user()->id;
      $user= User::where('id','=',$inputAuthor)->first();
      // dd($user);
      $flat->user()->associate($user->id);
      // Salva
      $flat->save();

      $serviceId=$validatedData['services'];
      $services=Service::find($serviceId);

      $flat->services()->attach($services);

      return redirect('/user/' . $user->name);


    }

    function updateFlat(FlatRequest $request ,$id)
    {

      $validateData=$request->validated();
      // dd($request->all());
      $flat=Flat::findOrFail($id);
      $inputAuthor= Auth::user()->id;
      $user= User::where('id','=',$inputAuthor)->first();

      $flat->update($validateData);

      $servicesId=$validateData['services'];
      $services=Service::find($servicesId);
      $flat->services()->sync($services);

      return redirect('/user/'. $user->name);
    }

}
