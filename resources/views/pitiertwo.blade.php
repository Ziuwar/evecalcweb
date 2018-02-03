@extends('layouts.app')

@section('content')


<div class="well">
    <p>The actual pi tier 2 item prices in EvE per EA (min sell in Jita).</p>
</div>

<table class="table table-striped">
  <thead>
    <tr><th>UID</th><th>Material</th><th>Price[isk]/EA</th><th>Tier</th></tr>
  </thead>
    <tbody>
    <?php foreach ($eve_pitiertwo as $material):
          echo "<tr><td>" .$material["uid"]. "</td>",
          "<td>" .$material["name"]. "</td>",
          "<td>" .$material["price"]. "</td>",
	  "<td>" .$material["tier"]. "</td></tr>";
        endforeach;?>
      </tbody>
</table>

@endsection
