<?php

class InitialController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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


	public function initDatabase()
	{
		/**init Flat table**/
		if (Flat::all()->count() == null) {

			for ($i = 1; $i <= 33; $i++){
				$flat = new Flat;
				$flat->number = $i;
				$flat->type = 'ข';
				$flat->name = 'ข.'.$i;
				$flat->save();
			}
			for ($j = 23; $j <= 37; $j++){
				$flat = new Flat;
				$flat->number = $j;
				$flat->type = 'ค';
				$flat->name = 'ค.'.$j;
				$flat->save();
			}
		}

		/**init Room table**/
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

		/**init Dorm table**/
		if (Dorm::all()->count() == null) {
			$dorms = DB::table('flats')
			->join('rooms', 'flats.type', '=', 'rooms.type')
			->select(DB::raw('CONCAT(flats.name, "-", rooms.number) as roomName, flats.name as flatName, flats.number as flatNumber, flats.type as flatType, rooms.number as roomNumber, rooms.floor as floor'))
			->orderBy('flatNumber','roomNumber','flatType')
			->get();

			foreach($dorms as $dorm){
				$d = new Dorm;
				$d->roomName = $dorm->roomName;
				$d->flatName = $dorm->flatName;
				$d->flatNumber = $dorm->flatNumber;
				$d->flatType = $dorm->flatType;
				$d->roomNumber = $dorm->roomNumber;
				$d->floor = $dorm->floor;
				$d->save();
			}
		}


		return Dorm::all();
	}


}
