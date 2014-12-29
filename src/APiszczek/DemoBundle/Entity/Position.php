<?php

namespace APiszczek\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  * @ORM\Table()
  * @ORM\HasLifecycleCallbacks
  */
class Position
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="decimal", scale=6, nullable=true)
     */
    private $latitude;
    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="decimal", scale=6, nullable=true)
     */

    private $longitude;
     /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;


	function __construct(){
		
	}


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Position
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Position
     */
    public function setLongitude($longitude)
    {
        exit('test2');
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set location
     *
     * @param string $location
     * @return Position
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Called after entity persistence
     * @ORM\prePersist()
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$this->latitude.",".$this->longitude."&key=AIzaSyBeV_C4VB8-UkTC4NUL-sftXSyZw0HMvLw";

        $resp_json = file_get_contents($url);
         
        // decode the json
        $resp = json_decode($resp_json, true);

        // response status will be 'OK', if able to geocode given address 
        if($resp['status']=='OK'){
     
            $this->location = $resp['results'][0]['formatted_address'];
        }

    }
}
