@extends('layouts.app')

@section('content')


<div id="mineraltextwell" class="well text-center" >
    <p>The actual mineral prices in EvE per EA (min sell in Jita).</p>
</div>

<div id="mineralwell" class="well">
  <table class="table table-striped">
    <thead>
      <tr><th>UID</th><th>Mineral</th><th>Price[isk]/EA</th></tr>
    </thead>
      <tbody>
      <?php foreach ($eve_minerals as $mineral):
            echo "<tr><td>" .$mineral["ItemUid"]. "</td>",
            "<td>" .$mineral["Mineral"]. "</td>",
            "<td>" .$mineral["ItemPrice"]. "</td></tr>";
          endforeach;?>
        </tbody>
  </table>
</div>

@endsection
