<?php

namespace App\Http\Controllers;

use App\EveItemData;

class EvelpappController extends Controller
{
  public function index()
  {
    $lp_items = EveItemData::all();

    return view('evelpapp', compact('lp_items'));
  }
}
