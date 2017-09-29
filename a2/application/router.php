<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once 'application/load.class.php';
require_once 'application/models/model.class.php';
require_once 'application/models/user.class.php';
require_once 'application/controllers/controller.class.php';

new Controller();

$filename = 'application/controllers/controller.class.php';

if (file_exists($filename)) {
  echo "The file $filename exists";
}
else {

  echo "The file $filename does not exist";
}
 ?>
