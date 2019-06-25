<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlatRequest;

use Auth;
use App\Flat;
use App\Service;
use App\User;
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
    public function index()
    {
        return view('index');
    }


    function showProfile(){

      // SELECT flats.flat_name,flats.number_of_rooms,flats.mq,flats.flat_price,
      // flats.user_id,services.name
      // FROM flat_service
      // JOIN flats ON flat_service.flat_id=flats.id
      // JOIN services ON flat_service.service_id=services.id

      $inputAuthor= Auth::user()->id;
      // $flats = Flat::where('user_id','=',$inputAuthor)->get();
      $flats=DB::table('flat_service')
                ->join('services','flat_service.service_id','=','services.id')
                ->join('flats','flat_service.flat_id','=','flats.id')
                ->where('flats.user_id',$inputAuthor)
                ->get();

                // dd($flats);
      return view('page.userInfo', compact('flats'));
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

    function searchFlat()
    {
      $city=$_GET['city'];
      $flats = Flat::where('city','LIKE','%'. $city .'%')->get();

      return view('page.flatList', compact('flats'));
      // dd($results);
    }

    function addFlat()
    {
      $flats = Flat::all();
      $services = Service::all();
      $users = User::all();
      return view('page.addFlat' , compact('flats', 'services' , 'users'));
    }

}
