<?php

namespace App\Http\Controllers;
use App\Http\ConvertTrait\ConvertKilometer;
use App\Http\Requests\TreasureRequest;
use App\Treasure;

class HomeController extends Controller {
	use ConvertKilometer;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */

	public function show() {
		return view('home');
	}
	public function index(TreasureRequest $request) {
		$latitude  = $request->latitude;
		$longitude = $request->longitude;
		$results   = Treasure::all();
		foreach ($results as $result) {
			$latitude1  = $result->latitude;
			$longitude1 = $result->longitude;
			$kilometer  = $this->convertToKilometer($latitude1, $longitude1, $latitude, $longitude);
			if ($kilometer >= 1 && $kilometer <= 10) {
				session()->flash('win', $result->moneyvalues->amt);
				return redirect('/');
			} else {
				session()->flash('error');
			}
		}
		return redirect('/');
	}
}
