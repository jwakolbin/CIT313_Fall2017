
<?php include('views/elements/header.php');?>

<?php if($message){?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $message?>
  </div>
<?php }?>

<?php
if( is_array($post) ) {
    extract($post);

}?>



    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>

        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
<br  />
    <p>



      <?php
      if($u->isAdmin()) {
      ?>
      <div class="span8">
        <form action="<?php echo BASE_URL?>manageposts/edit<?php echo $task?>" method="post" onsubmit="editor.post()"
          <button id="submit" type="submit" class="btn btn-primary" >edit</button>
        </form>
        <form action="<?php echo BASE_URL?>manageposts/delete<?php echo $task?>" method="post" onsubmit="editor.post()"
          <button id="submit" type="submit" class="btn btn-primary" >delete</button>
        </form>
      <?php
      }
      else {

      }
      ?>

  </p>

<h3>Comments</h3>

<figure>
    <p><?php echo $commentText;?></p>

    <?php
    if($u->isAdmin()) {
    ?>
    <div class="span8">
      <form action="<?php echo BASE_URL?>manageposts/delete<?php echo $task?>" method="post" onsubmit="editor.post()"
        <button id="submit" type="submit" class="btn btn-primary" >delete</button>
      </form>
    <?php
    }
    else {

    }
    ?>
</figure>

        <div class="row">
            <div class="span8">
              <form action="<?php echo BASE_URL?>blog/<?php echo $task?>" method="post" onsubmit="editor.post()">


                <label>Comment</label>
                <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"><?php echo $commentText?></textarea>
          			<br/>

                <input type="hidden" name="postID" value="<?php echo $postID?>"/>

                <input type="hidden" name="uID" value="<?php echo $uID?>"/>

                <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
              </form>


            </div>
          </div>

        </div>


<?php include('views/elements/footer.php');?>
