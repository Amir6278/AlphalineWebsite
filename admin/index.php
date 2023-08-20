<?php
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
  header('Location: login.php');
  exit;
}
 require_once('functions.php');
 getHeader();
 getSidebar();



?>
           <div class="row ">
               <div class="col-md-12 main_content">
                <h5>Welcome to Alphaline Solutions Dashboard</h5> 
               </div>
           </div>
    

           <?php
         
       getFooter();
 

?>
   