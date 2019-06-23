<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlatRequest;


use App\Flat;
use App\Service;

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

      return view('page.userInfo' , compact('flats','services'));
    }

    function saveNewFlat(FlatRequest $request){

      $validatedData = $request->validated();
      $flat = Flat::create($validatedData);
      $servicesId = $validatedData['services'];
      $services = Service::find($servicesId);

      $flat->services()->associate($services);

    }

}
