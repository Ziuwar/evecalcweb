<?php

namespace App\Http\Controllers;

use App\PiTierTwo;

class PiTierTwoController extends Controller
{
  public function index()
  {
    $collection = PiTierTwo::get(['uid','name','price','tier']);
    $eve_pitiertwo = $collection->sortBy('name')->values();

    return view('pitiertwo', compact('eve_pitiertwo'));
  }
}
