<?php

Route::get('/', function()
{
	// return View::make('hello');
	// $user = DB::table('users')->find(1);

	// die(var_dump($user));
	// return $user->username;
	return View::make('hello');

});

Route::get('/init', function()
{
	if (Flat::all()->count() == null) {

		for ($i = 1; $i <= 33; $i++){
			$flat = new Flat;
			$flat->number = $i;
			$flat->type = 'ข';
			$flat->name = $i.'. ข';
			$flat->save();
		}
		for ($j = 23; $j <= 37; $j++){
			$flat = new Flat;
			$flat->number = $j;
			$flat->type = 'ค';
			$flat->name = $j.'. ค';
			$flat->save();
		}
	}

	if (Room::all()->count() == null) {
		$counter=1;
		$floor=1;
		for ($i = 11; $i <= 44; $i++){
			$room = new Room;
			$room->number = $i;
			$room->floor = $floor;
			$room->type = 'ข';
			$room->save();
			$counter++;
			if($counter >= 5){
				$counter = 1;
				$i = $i+6;
				$floor++;
			}
		}

		$counter=1;
		$floor=1;
		for ($x = 11; $x <= 48; $x++){
			$room = new Room;
			$room->number = $x;
			$room->floor = $floor;
			$room->type = 'ค';
			$room->save();
			$counter++;
			if($counter >= 9){
				$counter = 1;
				$x = $x+2;
				$floor++;
			}
		}
	}

	return Flat::all();
});
