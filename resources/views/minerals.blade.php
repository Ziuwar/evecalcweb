@extends('layouts.app')

@section('content')


<div class="well">
    <p>The actual mineral prices in EvE per EA (min sell in Jita).</p>
</div>

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

@endsection
