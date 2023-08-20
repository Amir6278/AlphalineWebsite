<?php
 require_once('functions.php');
 $ID = $_GET['d']; 
 mysqli_query($connection,"DELETE FROM `clients` WHERE `client_id` = '$ID' ");


 header("Location:client.php");

?>