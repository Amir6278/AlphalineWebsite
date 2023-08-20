<?php
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
  header('Location: login.php');
  exit;
}
 require_once('functions.php');
 getHeader();
 getSidebar();

 $bannerID = $_GET['v'];

 $selQ = mysqli_query($connection,"SELECT * FROM `banner` WHERE `ban_id` ='$bannerID' ");

 while($banner  = mysqli_fetch_assoc($selQ)){

//  print_r($data);

?>
    
           <div class="row">
            
               <div class="col-md-12 main_content">
                <div class="card">
                    <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Data</h4>

                        </div>
                      
                        
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-2">
                           
                          </div>
                          <div class="col-md-8">
                            <div class="col-12 text-center h-50" >
                            <img src="../img/<?= $banner['ban_img'] ?>" class="rounded h-100 img-fluid w-100 border-3 py-3" alt="" srcset="">
                            </div>
                            <table class="table mb-3 table-bordered table-striped table-hover custom_view_table">
                               
                          
                           
                       <tr>
                                   
                                    <td>Banner Caption</td>
                                    <td>:</td>
                                    <td><?=  $banner['ban_title'] ?></td>
                                  </tr>
                                  <tr>
                                   
                                    <td>Phone</td>
                                    <td>:</td>
                                    <td><?=  $banner['ban_des'] ?></td>
                                  </tr>
                                  <tr>
                                   
                                    <td>Banner button</td>
                                    <td>:</td>
                                    <td><?=  $banner['ban_btn'] ?></td>
                                  </tr>
                                
                                

                              </table>

                            <?php } ?>  
                          </div>
                          <div class="col-md-2"></div>
                      </div>
                    </div>
                  </div>
               </div>
           </div>
       </div>

       <?php
         
         getFooter();
   
  
  ?>