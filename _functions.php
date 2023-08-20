<?php 

function getPage(){

  
    $pageInfoArr = explode('/',$_SERVER['PHP_SELF']);
    $page = $pageInfoArr[count($pageInfoArr)-1];

return $page;


}




?>