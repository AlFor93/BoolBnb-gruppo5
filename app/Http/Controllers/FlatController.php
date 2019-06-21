<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Flat;
use App\Image;
use App\Service;
use App\User;

class FlatController extends Controller
{
      public function showFlat($id)
    {

      // SELECT flats.*, users.firstname,users.lastname
      // FROM flats
      // JOIN users on flats.user_id = users.id
      //
      // $flat=Flat::findOrFail($id);

      $flat=DB::table('flats')
                ->join('users','flats.user_id','=','users.id')
                ->where('flats.id',$id)
                ->get();


      $images=Image::where('flat_id',$id)->get();

      $services=DB::table('flat_service')
                ->join('services','flat_service.service_id','=','services.id')
                ->where('flat_id',$id)
                ->get();
      return view('page.flats', compact('flat','images','services'));
      // dd($images);
    }
}
