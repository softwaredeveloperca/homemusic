<?php namespace homemusic\Http\Controllers;

use homemusic\Http\Requests;
use homemusic\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

use homemusic\Playlist;
use homemusic\Song;

class PlaylistController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	} 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$playlists=Playlist::where('user_id', '=', Auth::user()->id)->get();
		$song=Playlist::where('user_id', '=', Auth::user()->id)->where('default', true)->with('Songs')->first()->Songs;

//		
//		$playlists=Playlist::where('user_id', '=', Auth::user()->id)->with('Songs')->get();

//		var_dump($playlists);
		$songs=$playlists[0]->Songs;
//		$songs=$playlists->songs();
/*/*		$songs=Playlist::find(i

		$songs=Playlist::where('selected', true)
			->where('user_id', '=', $user_id)
			->get();
*///var_dump($playlists);
		return view('playlist', compact('playlists', 'songs'));
	}
	public function create($name)
	{
		$playlist = new Playlist;
		$playlist->name=$name;
		$playlist->user_id=Auth::user()->id;
		$playlist->save();
		return back()->with('message', 'playlist added');
	}
	public function add($song_id)
	{
		
		$playlist=Playlist::where('user_id', '=', Auth::user()->id)->first();
		// TODO: add default selection for many playlists
		// where('selected', '=', true)->
		if(!$playlist->songs->contains($song_id)){

			$playlist->songs()->attach($song_id);
			return back()->with('message', 'Song Added');
		}
		return back();
	}
	public function remove($song_id)
	{
		$playlist=Playlist::where('user_id', '=', Auth::user()->id)->with('Songs')->first();
		if($playlist->songs->contains($song_id)){
                        $playlist->songs()->detach($song_id);
                        return back()->with('message', 'Song Removed');
                }
		return back();
	}
}
