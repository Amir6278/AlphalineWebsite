<?php

 $server = "localhost";
 $user = "root";
 $password = "";
 $dbName = "alphaline";



 $connection = mysqli_connect($server,$user,$password,$dbName);
 if(!$connection){
     echo 'Database Connection Failed';
 }

 
   
?>