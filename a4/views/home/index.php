<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title;?></h1>
  </div>
    <div class="alert alert-success">
        <?php echo $message;?>
    </div>

<?php

//$rss = simplexml_load_file("https://www.wired.com/feed");

echo "<h1>".$wired->channel->title."</h1>";

$i=0;
foreach ($wired->channel->item as $item){
			echo $item->title."<br />".$item->link."<hr  />";
			if (++$i >= 5) {
				break;
			}
}


?>

</div>
<?php include('views/elements/footer.php');?>
