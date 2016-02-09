@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{{$album->album_name}}</h1></div>

				<div class="panel-body">
					<img class="img-circle" align="left" src="/albums/{{ $album->logo  }}/{{ $album->logo }}.jpg" width="100" height="100">
			<br><br>		<p class="lead">  {{$album->artist_name}}</p>

					<table  id="table-style" class="table table-hover table-striped"  data-toggle="table">
					    <thead>
   					     <tr>
     					       <th data-field="name">Name</th>
 				               <th data-field="length">Length</th>
				       	       <th data-field="action">#</th>
    					     </tr>
    					</thead>
					<tbody>
					@foreach ($album->songs as $song)
        					<tr><td>{{$song->name}}</td>
						<td>{{$song->song_length}}</td>
						<td><a href="/download/album/{{$album->logo}}/song/{{$song->file_name}}">Download</a> - <a href="/playlist/add/{{$song->id}}">Add to Playlist</a></td></tr>
	@endforeach
</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
