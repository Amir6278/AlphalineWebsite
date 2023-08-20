<?php
 require_once('functions.php');
  $ID = $_GET['d']; 
 mysqli_query($connection,"DELETE FROM `contacts` WHERE `id` = '$ID' ");


 header("Location:allMessage.php");

?>