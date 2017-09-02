<?php

include "_includes/config.php";

include ABSOLUTE_PATH . "/_includes/header.inc.php";

 
?>
<body>
<div id="content">

<?php
$myArray = array('Jennifer', 'Yellow', 'Fried Green Tomatoes', 'Good Omens', 'Ravelry');
echo "<h1>$myArray[0]</h1>";

function one($array) {
  unset($array[0]);

  foreach ($array as $item) {
     echo "<ul><li>$item</li></ul>";
  }

}

one($myArray);

/*
$myArray = array('Jennifer', 'Yellow', 'Fried Green Tomatoes', 'Good Omens', 'Ravelry');

//$myNewArray = myArray.shift

echo "<h1>$myArray[0]</h1>";

unset($myArray[0]);

foreach ($myArray as $item) {
   echo "<ul><li>$item</li></ul>";
}

$myNewArray = array('myName' => 'Jennifer', 'myColor' => 'Yellow', 'myMovie' => 'Fried Green Tomatoes', 'myBook' => 'Good Omen', 'mySite' => 'Ravelry');

//$myNewArray = myArray.shift

echo "<h1>$myNewArray[myName]</h1>";

unset($myNewArray["myName"]);

foreach ($myNewArray as $key => $item) {
   echo "<ul><li>$key : $item</li></ul>";
}
*/

?>
</div>
</body
<?php
include "_includes/footer.inc.php";

 ?>
