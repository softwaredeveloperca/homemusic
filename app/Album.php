<?php namespace homemusic;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {
	protected $table = 'albums';
	
	//public function wongs()

		//return $this->hasMany('homemusic/Song', '')
	//}
	
	public function songs()
	{
		return $this->hasMany('homemusic\Song');
	}
 
}
