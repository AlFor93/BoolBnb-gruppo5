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

      $flats=DB::table('flats')
                ->join('flat_sponsor','flats.id','=','flat_sponsor.flat_id')
                ->get();

      return view('page.home',compact('flats','images'));
      // dd($flats);



  }







}
