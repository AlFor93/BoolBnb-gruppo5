<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlatRequest;

use Auth;
use App\Flat;
use App\Service;
use App\User;


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
    public function index()
    {
        return view('index');
    }


    function createNewFlat(){

      $flats = Flat::all();
      $services = Service::all();
      $users = User::all();

      return view('page.userInfo', compact('flats','services','users'));
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

      $inputAuthor= Auth::user()->name;
      $user= User::where('name','=',$inputAuthor)->first();
      $flat->user()->associate($user);

      // Salva
      $flat->save();

      $serviceId=$validatedData['services'];
      $services=Service::find($serviceId);

      $flat->services()->attach($services);

      return redirect('/');


    }

    function searchFlat()
    {
      $city=$_GET['city'];
      $flats = Flat::where('city','LIKE','%'. $city .'%')->get();

      return view('page.flatList', compact('flats'));
      // dd($results);
    }

}
