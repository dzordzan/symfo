<?php

namespace APiszczek\DemoBundle\Component\Feed;


class Uploader {

protected $fs;

	public function __construct($fs)
	{
		$this->fs = $fs;
	}

	public function saveFile($file)
	{

		$address = IMG.'/';
		if (!$this->fs->exists($address))
			$this->fs->mkdir($address, 0777);

		$filename = $file->getClientOriginalName();
		$fileExtension = $file->guessExtension();
		$i = 0;
		while ($this->fs->exists($address.$filename))
			$filename = explode('.'.$fileExtension, $file->getClientOriginalName())[0].'('.($i++).').'.$fileExtension;

     	
        $file->move($address,$filename);
  		
        return $filename;
    }
	

}