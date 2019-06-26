<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Flat;
use App\Image;
use App\Service;
use App\User;
use Auth;

class FlatController extends Controller
{
  public function showSponsoredFlat()
  {
    $images=Image::all();

    // SELECT * FROM images JOIN flats ON images.flat_id = flats.id WHERE images.flat_id = 4

    // $images = DB::table('images')
    //           ->join ('flats','images.flat_id', '=', 'flats.id')
    //           ->where('image.flat_id ', 'flats.id');
    //           dd($images);

    $flats=DB::table('flats')
              ->join('flat_sponsor','flats.id','=','flat_sponsor.flat_id')
              ->get();

              // dd($flats);

    $allFlats=Flat::all();

    // dd($allFlats);

    return view('page.home',compact('flats','images','allFlats'));
    // dd($flats);

  }

  function searchFlat()
  {
    $city=$_GET['city'];
    $flats = Flat::where('city','LIKE','%'. $city .'%')->get();

    return view('page.flatList', compact('flats'));
    // dd($results);
  }

  public function showFlat($id)
  {

    // SELECT flats.*, users.firstname,users.lastname
    // FROM flats
    // JOIN users on flats.user_id = users.id
    //
    // $flat=Flat::findOrFail($id) ;

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
  }


}
