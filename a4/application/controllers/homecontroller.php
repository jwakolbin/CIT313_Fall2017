<?php

class HomeController extends Controller{

	public function index(){
		$feed = simplexml_load_file("https://www.wired.com/feed");
		$rss = new RssDisplay($url);

		$feed_data = $rss->getFeedItems(5);


		$channel_title = $feed_data->channel->title;

		$this->set('rss_title',Wired);
		$this->set(wired,$feed);

	}

}

?>
