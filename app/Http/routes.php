<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//if (!Schema::hasTable('albums'))
//{
//    return;
//}

Route::get('/playlist', 'PlaylistController@index');

Route::get('playlist/create/{name}', 'PlaylistController@create');

Route::get('/playlist/add/{song_id}', 'PlaylistController@add');

Route::get('/playlist/remove/{song_id}', 'PlaylistController@remove');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('browse', 'AlbumController@index');

Route::get('download/album/{album_id}/song/{filename}', function($album_id, $filename){
	$file = storage_path('app') . '/files/albums/' . $album_id . '/' . $filename;
	return response()->download($file);
});

Route::get('album/{id}', 'AlbumController@album');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
