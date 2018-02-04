@extends('layouts.app')

@section('content')


<div class="well">
    <p>This app assumes you by the blueprint for an faction item in the LP Store
      and produce the item yourself. It is ordered by the efficiency, so the best
      buck per loyalty point. It factors in the mineral cost and i want to add
      player tax in the future. All prices from Jita market.
</div>


<div id="lpappwell" class="well">

  <table class="table table-striped">
    <thead>
      <tr><th>ItemUid</th><th>ItemName</th><th>IskPrice[isk]</th><th>LpPoints[EA]</th>
          <th>MaterialPrice[isk]</th><th>ItemTotalPrice[isk]</th><th>SellPriceJita[isk]</th>
          <th>Profit[isk]</th><th>ProfitPercent[%]</th><th>Efficiency[isk/lp]</th></tr>
    </thead>
      <tbody>
      <?php foreach ($lp_items as $item):
            echo "<tr><td>" .$item["ItemUid"]. "</td>",
            "<td>" .$item["ItemName"]. "</td>",
            "<td>" .$item["IskPrice"]. "</td>",
            "<td>" .$item["LpPoints"]. "</td>",
            "<td>" .$item["MaterialPrice"]. "</td>",
            "<td>" .$item["ItemTotalPrice"]. "</td>",
            "<td>" .$item["SellPriceJita"]. "</td>",
            "<td>" .$item["Profit"]. "</td>",
            "<td>" .$item["ProfitPercent"]. "</td>",
            "<td>" .$item["Efficiency"]. "</td></tr>";
          endforeach;?>
        </tbody>
  </table>

</div>

@endsection
