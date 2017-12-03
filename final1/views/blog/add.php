
<div class="container">
	<div class="page-header">

  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>


	<h3>Comments</h3>

	<div class="container">
			<div class="page-header">
		<figure>
			<?php foreach($comments as $c){?>
				<p><?php echo $c['commentText']; ?></p>

				<?php
				if($u->isAdmin()) {
				?>
					<a href="<?php echo BASE_URL?>blog/delete/<?php echo $postID?>" class="btn btn-primary">Delete</a>
				<?php
				}

				else {

				}
			}
				?>

				<br  />
			</div>
			</div>

		</figure>

  <h3>Add Comments</h3>
  <?php
  if($u->isRegistered()) {
  ?>

  <div class="row">
      <div class="span8">

        <form action="<?php echo BASE_URL?>blog/<?php echo $task?>/<?php echo $pID?>" method="post" onsubmit="editor.post()">
          <label>Comment Text</label>
          <textarea name="commentText" style="width:556px;height: 200px"><?php echo $commentText; ?></textarea>
					<label for="date">Date</label>
					<?php // set timezone
date_default_timezone_set('America/Indiana/Indianapolis');?>
					<input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">
          <input type="hidden" name="postID" value="<?php echo $postID; ?>"/>

          <input type="hidden" name="uID" value="<?php echo $uID; ?>"/>

          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>



            <?php
            }
            else {

            }
            ?>

          </div>
          </div>


</div>
<?php include('views/elements/footer.php');?>
