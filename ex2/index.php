<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once("classes/user.class.php");
include_once("classes/user_type1.class.php");
include_once("classes/user_type2.class.php");


$user_type1 = new user_type1('Regular User','jwakolbi');

$user_type2 = new user_type2('Administrator','crdillion');

$user_type2->first_name= "Rob";
$user_type2->last_name= "Dillion";
$user_type2->email_address= "rdillion@iupui.edu";


$user_type1->first_name= "Jennifer";
$user_type1->last_name= "Wakolbinger";
$user_type1->email_address= "jwakolbi@iupui.edu";

?>


<html >
<head>
  <meta charset="UTF-8">
  <title>Excerise 2</title>


</head>

<body>

 <?php echo "User Level: ".$user_type1->user_level;  ?><br />
<?php echo "$user_type1->user_level".": "."$user_type1->user_id";  ?><br />
<?php echo "$user_type1->user_level"." Type: ". "$user_type1->user_type";   ?><br />
<?php echo "First Name: "."$user_type1->first_name"; ?><br />
<?php echo "Last Name: "."$user_type1->last_name";   ?><br />
<?php echo "Email Address: "."$user_type1->email_address";  ?><br />

<hr>

<?php echo "User Level: ".$user_type2->user_level;  ?><br />
<?php echo "$user_type2->user_level".": "."$user_type2->user_id";  ?><br />
<?php echo "$user_type2->user_level"." Type: ". "$user_type2->user_type";   ?><br />
<?php echo "First Name: "."$user_type2->first_name"; ?><br />
<?php echo "Last Name: "."$user_type2->last_name";   ?><br />
<?php echo "Email Address: "."$user_type2->email_address";  ?><br />
<br />


</body>
</html>
