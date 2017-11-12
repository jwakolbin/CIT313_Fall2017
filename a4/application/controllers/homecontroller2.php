<?php

class HomeController extends Controller{

	public function index(){
		$feed = "https://www.wired.com/feed";
		$rss = new RssDisplay($url);

		$feed_data = $rss->getFeedItems();


		$channel_title = $feed_data->channel->title;

		$this->set('rss_title',Fox59);

	}

}

?>
