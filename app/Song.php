<?php namespace homemusic;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {
	protected $table= 'songs';
	//
	public function album()
	{
		return $this->belongsTo('homemusic\Album', 'album_id');
	}
	
	public function playlists()
	{
		return $this->belongsToMany('homemusic\Playlist', 'playlistsongs', 'song_id', 'playlist_id');
	}
/*
	public function playlist()
	{
		return $this->belongsTo('homemusic\Playlist', 'song_id');
	}
*/
}
