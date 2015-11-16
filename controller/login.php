<?php

require_once "con.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$ssql = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'";
$rs = mysql_query($ssql,$conn);

if (mysql_num_rows($rs)!=0){
   	// Everything went ok.
   	echo "true";
}
else {
   	// Something happened
   	echo "false";
}

?>
