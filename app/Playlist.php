<?php namespace homemusic;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model {
	
	protected $fillable = array('user_id', 'name', 'default');
	
	public function user()
	{
		return $this->belongsTo('homemusic\User', 'id');
	}

	public function songs()
	{
		return $this->belongsToMany('homemusic\Song', 'playlistsongs', 'playlist_id', 'song_id');
	}

}
