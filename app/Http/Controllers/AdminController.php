<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Flat;
use App\Image;
use App\Service;
use App\User;
use Auth;

class AdminController extends Controller
{
  function addFlat()
  {
    $flats = Flat::all();
    $services = Service::all();
    $users = User::all();
    return view('page.addFlat' , compact('flats', 'services' , 'users'));
  }

  function showGraph($id)
  {
    $inputAuthor= Auth::user()->id;
    $user= User::where('id','=',$inputAuthor)->first();

    $flat=Flat::where('id' , $id)->first();
              // ->join('users','flats.user_id','=','users.id')



    $images=Image::where('flat_id',$id)->get();

    $checkedServices=DB::table('flat_service')
              ->join('services','flat_service.service_id','=','services.id')
              ->where('flat_id',$id)
              ->get();

    $allServices=Service::all();

    // dd($allServices);

    $allServId=[];

    foreach ($allServices as $allService) {

      // allservice di i
      // dd($allService);

      $nofind=true;

      foreach ($checkedServices as $service) {

        // dd($service->service_id);

        if ($allService->id == $service->service_id) {
          $nofind=false;
        }
      }

      if ($nofind) {
        $allServId[]=$allService;
      }
    }
    // dd($allServId);


    return view('page.graph', compact('flat','images','checkedServices','allServId'));
  }

  function deleteFlat($id)
  {
    $inputAuthor= Auth::user()->id;
    $user= User::where('id','=',$inputAuthor)->first();

    $flat=Flat::findOrFail($id);
    $flat->sponsors()->delete();
    $flat->messages()->delete();
    $flat->images()->delete();
    $flat->services()->delete();
    $flat->delete();

    return redirect('/user/' . $user->name);
  }
}
