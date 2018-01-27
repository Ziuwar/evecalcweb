<?php

namespace App\Http\Controllers;

use App\EveItemData;

class EvelpappController extends Controller
{
  public function index()
  {
    $collection = EveItemData::get(['ItemUid','ItemName','IskPrice','LpPoints',
                                    'MaterialPrice','ItemTotalPrice','SellPriceJita',
                                    'Profit','ProfitPercent','Efficiency']);
    $lp_items = $collection->sortByDesc('Efficiency')->values();

    return view('evelpapp', compact('lp_items'));
  }
}
