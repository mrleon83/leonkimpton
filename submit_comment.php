<?php
session_start();
//include ("includes/header_home.php");
include ('includes/config.php');
include ('includes/functions.php');

$name = sanitizeString($_POST['name']);
$comment = sanitizeString($_POST['comment']);
$blogid = sanitizeString($_POST['blogid']);

        
  $sql = "INSERT INTO comments (username, blogid, date, comment) VALUES (\"$name\", \"$blogid\", $date, \"$comment\")";
  $mysqli->query($sql);
  
  echo $sql;