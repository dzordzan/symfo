<?php

namespace Jkanclerz\Application\Geocode;

class Geocode {

	protected $location;

	public function __construct($latitude, $longitutde)
	{
		$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$latitude.",".$longitutde."&key=AIzaSyBeV_C4VB8-UkTC4NUL-sftXSyZw0HMvLw";

	    $resp_json = file_get_contents($url);
	     
	    // decode the json
	    $resp = json_decode($resp_json, true);

    // response status will be 'OK', if able to geocode given address 
	    if($resp['status']=='OK'){
	 
	        $this->location = $resp['results'][0]['formatted_address'];
	    }
	}
	public function getLocation()
	{
		return $this->location;
	}
}
