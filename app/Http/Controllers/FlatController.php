<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Flat;
use App\Image;
use App\Service;

class FlatController extends Controller
{
      public function showFlat($id)
    {

      $flat=Flat::findOrFail($id);
      $images=Image::where('flat_id',$id)->get()->first();
      $flatService=DB::table('flats')
                ->join('flat_service','flats.id','=','flat_service.flat_id')
                ->get();

      return view('page.prova', compact('flat','images','flatService'));
      // dd($flat);
    }


}
