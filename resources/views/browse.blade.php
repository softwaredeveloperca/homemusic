@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Browse by Album</div>

				<div class="panel-body">
					
					@foreach ($albums as $album)
						<table class="table"><tr><td width="250">
						
							<h3>{{ $album->album_name }}</h3><br>
							<img align="top" class="img-thumbnail"  src="/albums/{{ $album->logo  }}/{{ $album->logo }}.jpg">
							<div>by: {{ $album->artist_name }}</div>
							<div>
						</td><td><br><br><br><br>
							<table class="table table-striped">
							@foreach ($album->songs as $song)
								<tr><td>{{$song->name}}</td></tr>
							@endforeach
							</table>
							</div>
							<p class="navbar-btn">
							<a class="btn btn-primary" href="/album/{{$album->id}}">More</a>
						</td></tr></table>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
