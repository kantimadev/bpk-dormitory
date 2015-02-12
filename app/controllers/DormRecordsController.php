<?php

class DormRecordsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		// $flatDefaults = Flat::where('type', '=', 'ข')->orderBy('number','asc')->get();
		// return View::make('dormRecord')->with('flatDefaults', $flatDefaults);

		// $dormRecords = Flat::where('type', '=', 'ข')->orderBy('number','asc')->get();
		$dormRecords = DormRecord::all();

		return View::make('dormRecords.index')->with('dormRecords', $dormRecords);;


		// $flatNames = Flat::where('type', 'ข')->orderBy('number','asc')->get()->lists('name');
		// $flats = Flat::orderBy('number','asc')->get();

		// return $flats;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dormRecords.create');
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
	public function show($roomName)
	{
		$dormRecord = DormRecord::where('roomName', $roomName)->first();

		return View::make('dormRecords.show')->with('dormRecord', $dormRecord);
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
