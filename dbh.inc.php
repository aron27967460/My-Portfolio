<?php

$conn = mysqli_connect('localhost','aronchen_aronc','chen1995840205');

if(!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

mysql_select_db ("aronchen_comments");
?>
