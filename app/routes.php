<?php

Route::get('/', function()
{
	// return View::make('hello');
	// $user = DB::table('users')->find(1);

	// die(var_dump($user));
	// return $user->username;
	if ( Flat::all()->count() == null) {

			for ($i = 1; $i <= 33; $i++){
				$flat = new Flat;
				$flat->number = $i;
				$flat->type = 'ข';
				$flat->save();
			}
			for ($j = 23; $j <= 37; $j++){
				$flat = new Flat;
				$flat->number = $j;
				$flat->type = 'ค';
				$flat->save();
			}
	} else {
		return Flat::all();
	}


});
