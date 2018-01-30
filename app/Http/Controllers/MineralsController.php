<?php

namespace App\Http\Controllers;

use App\MineralPrice;

class MineralsController extends Controller
{
  public function index()
  {
    $collection = MineralPrice::get(['ItemUid','Mineral','ItemPrice']);
    $eve_minerals = $collection->sortBy('ItemUid')->values();

    return view('minerals', compact('eve_minerals'));
  }
}
