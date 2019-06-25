<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controller\BoolHomeController;
use Illuminate\Support\Facades\DB;
use App\Flat;
use App\Image;


class BoolHomeController extends Controller
{

  public function index()
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







}
