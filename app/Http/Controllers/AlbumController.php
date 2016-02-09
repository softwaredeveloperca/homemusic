<?php 
namespace homemusic\Http\Controllers;

use homemusic\Http\Requests;
use homemusic\Http\Controllers\Controller;
use homemusic\Album;
use homemusic\Song;
use Illuminate\Http\Request;
use DB;

class AlbumController extends Controller {

	public function __construct()
        {
                $this->middleware('guest');
        }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//		var_dump(Song::all());
//		$songs=Album::find(1)->songs;
//		var_dump(Album::find(1));
//var_dump($songs);
//		$album = Album::find(1);

/*
		foreach($album->songs as $song)
		{
			var_dump($song);
		}
*/
//var_dump($songs);	
		$albums= Album::all();
//var_dump($albums);
	//	$songs=Song::all();
//		var_dump($songs);
//		$albums = DB::table('albums')
//				->join('songs', 'albums.id', '=', 'songs.album_id')
//				->get();

		return view('browse', compact('albums'));
	}
	
	public function test()
	{
		print "in test";
	}

	public function album($id)
	{
		$album=Album::with('Songs')->find($id);
//	$album=Album::find($id);

		return view('album', compact('album'));
	
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
