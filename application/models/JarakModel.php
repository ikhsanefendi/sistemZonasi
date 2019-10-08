<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JarakModel extends CI_Model {

	function getDistanceBetween($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi') 
	{ 
		$theta = $longitude1 - $longitude2; 
		$distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)))  + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
		$distance = acos($distance); 
		$distance = rad2deg($distance); 
		$distance = $distance * 60 * 1.1515; 
		switch($unit) 
		{ 
			case 'Mi': break; 
			case 'Km' : $distance = $distance * 1.609344; 
		} 
		return (round($distance,2)); 
	}

		// function axis($lat1,$long1,$lat2,$long2){
		// 	$earthRadius=6371.009;
		// 	$axis = (SIN(($lat2-$lat1)/2) * SIN($lat2-$lat1/2) + COS($lat1) * COS($lat2) * SIN($long2-$long1)/2 * SIN($long2-$long1)/2);
		// 	$distance = $earthRadius * (2 * ATAN2(SQRT($axis), SQRT(1-$axis)));
			
		// 	$distance = acos($distance); 
		// 	$distance = rad2deg($distance); 
		// 	$distance = $distance * 60 * 1.1515;
		// 		return $distance;
		// }
		

}

/* End of file JarakModel.php */
/* Location: ./application/models/JarakModel.php */