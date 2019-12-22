<?php
namespace App\Http\ConvertTrait;
trait ConvertKilometer {
	public function convertToKilometer($latitude1, $longitude1, $latitude, $longitude) {
		$theta = $longitude1-$longitude;
		$dist  = sin(deg2rad($latitude1))*sin(deg2rad($latitude))+cos(deg2rad($latitude1))*cos(deg2rad($latitude))*cos(deg2rad($theta));
		$dist  = acos($dist);
		$dist  = rad2deg($dist);
		$miles = $dist*60*1.1515;
		return ($miles*1.609344);

	}
}