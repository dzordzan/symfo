<?php

namespace APiszczek\DemoBundle\Component\Feed;

class FeedRepository
{
	protected $feeds;

	public function __construct()
	{
		$this->feeds = json_decode(file_get_contents( APP.'/cache/feed.json'), true);
	}

	public function getFeeds(){
		return $this->feeds;
	}

	public function addFeed($feed){
		
		$this->feeds[] = (array) $feed;
		$this->updateFile();
	}
	public function feedRemove($feedId){
		foreach ($this->feeds as $key => $item) {
		    if ($item['picture'] === $feedId) {
		        unset($this->feeds[$key]);
		    }
		}
		$this->updateFile();
	}
	public function updateFile()
	{
		file_put_contents(APP.'/cache/feed.json',json_encode($this->feeds, JSON_PRETTY_PRINT));
	}
}
