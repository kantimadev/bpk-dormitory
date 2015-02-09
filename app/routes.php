<?php

// Route::get('/', function()
// {
// 	// return View::make('hello');
// 	// $user = DB::table('users')->find(1);
//
// 	// die(var_dump($user));
// 	// return $user->username;
// 	return View::make('hello');
//
// });

Route::get('initDB', 'InitialController@initDatabase');

Route::resource('dormRecords','DormRecordsController');

Route::get('/', 'DormRecordsController@index');

Route::get('/ajax-flattype', function()
{
  $flattype_id = Input::get('flattype_id');
  $flatFromTypes = Flat::where('type', '=', $flattype_id)->orderBy('number','asc')->get();

  return Response::json($flatFromTypes);
});
