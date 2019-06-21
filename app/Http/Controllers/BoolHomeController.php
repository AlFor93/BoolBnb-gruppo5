<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controller\BoolHomeController;
use Illuminate\Support\Facades\DB;
use App\Flat;


class BoolHomeController extends Controller
{

  public function index()
  {
      // $spFlats=Flat::has('created_at')->take(6)->get();

      $flats=DB::table('flats')
                ->join('flat_sponsor','flats.id','=','flat_sponsor.flat_id')
                ->join('images','flats.id','=','images.flat_id')
                ->get();

<<<<<<< HEAD
                dd($flats);

      // return view('page.home',compact('flats'));
=======
      return view('page.home',compact('flats'));
>>>>>>> parent of f2245ec... a bomba
      // function isPresent($elem,$flats)
      // {
      //   $finded=false;
      //   for ($i=0; $i < count($flats) ; $i++) {
      //
      //     if ($elem==$flats[$i]) {
      //
      //       $finded=true;
      //     }
      //   }
      //   return $finded;
      // }

<<<<<<< HEAD


  }



=======
      

  }

  
>>>>>>> parent of f2245ec... a bomba





}
