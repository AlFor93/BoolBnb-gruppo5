<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoolHomeController extends Controller
{

  public function index()
  {
      return view('page.home');
  }
}