<?php

// Database connection:
$conn = mysql_connect("localhost","root","vegaceja") or die(mysql_error());

if(!$conn) {
  echo "Unable to connect to database: ".mysql_error();
  exit;
}

// Select DB
if(!mysql_select_db("imahmx",$conn)) {
  echo "Unable to select database: ".mysql_error();
  exit;
}

?>
