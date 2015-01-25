<?php

Route::get('/', function()
{
	// return View::make('hello');
	// $user = DB::table('users')->find(1);

	// die(var_dump($user));
	// return $user->username;
	return View::make('hello');

});

Route::get('/initDB', 'InitialController@initDatabase');
