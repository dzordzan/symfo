<?php

namespace Jkanclerz\Application\Repository;

use Jkanclerz\Application\Repository\FeedRepository;

class Feed
{
	public $picture;
	public $about;
	public $tags;
	public $location;

   	public function __construct(Array $properties=array()){
  		foreach($properties as $key => $value){
    		$this->{$key} = $value;
  		}
 	 }
 	 /*
 	public function getPicture()
 	{
 		return $this->picture;
 	}*/
	public function updatePicture($picture)
	{
		$this->picture = $picture;

		updateToFile();
	}
	public function updateToFile()
	{
		return 0;
	}
}