@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<form action="">
				<div class="panel-heading"><h1>My Playlist</h1></div>
				<div class="panel-body">
				Create New: <input type="text" name="NewPlaylist" placeholder="New Playlist name">
				<input type="button" class="btn btn-default" value="Create"><br><br>
				<select name="">
				@foreach ($playlists as $playlist)
                                       <option value="{{$playlist->id}}" <? if($playlist->selected){ ?> SELECTED<? } ?>>{{$playlist->name}}</a>
                                @endforeach
				</select>
 				<input class="btn btn-default" type="button" name="SelectPlaylist" value="Select"><br>
                                <input type="checkbox" name="savedefault" value="1"> Save as Default
				<br><br>
				<h4>Songs</h4>

				@foreach ($songs as $song)
					{{$song->name}} <a href="/playlist/remove/{{$song->id}}">X</a><br>
				@endforeach
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
