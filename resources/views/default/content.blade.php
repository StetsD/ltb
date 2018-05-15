<div class="row">
  <div class="col-md-4">
	<h2>Heading</h2>
	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
  </div>
  <div class="col-md-4">
	<h2>Heading</h2>
	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
  </div>
  <div class="col-md-4">
	<h2>Heading</h2>
	<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
  </div>
</div>

<!-- {{ $bvar or $title }} -->

@if(count($data) < 3)
	In mass less 3
@else
	In mass more 3
@endif



@for($i = 0; $i < count($data); $i++)

	{{ $data[$i] }}

@endfor


@foreach($data as $k=>$value)
	<li>{{ $k.'-'.$value }}</li>
@endforeach
