<?php


   require_once('../_dbConnect.php');

 function getHeader(){
    require_once('includes/_header.php');
 }
 


 function getSidebar(){
    require_once('includes/_sidebar.php');
 }
  

 function getFooter(){
    require_once('includes/_footer.php');
 }
  
 function getPage(){

  
   $pageInfoArr = explode('/',$_SERVER['PHP_SELF']);
   $page = $pageInfoArr[count($pageInfoArr)-1];

return $page;


}

?>