<?php
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
  header('Location: login.php');
  exit;
}
 require_once('functions.php');
 getHeader();
 getSidebar();

 $msgID = $_GET['v'];

 $selQ = mysqli_query($connection,"SELECT * FROM `contacts`   WHERE `id` ='$msgID' ");

 while($data  = mysqli_fetch_assoc($selQ)){

//  print_r($data);

?>
    
           <div class="row">
            
               <div class="col-md-12 main_content">
                <div class="card">
                    <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Message</h4>

                        </div>
                       
                        
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-2">
                           
                          </div>
                          <div class="col-md-8">
                            
                            <table class="table table-bordered table-striped table-hover custom_view_table">
                               
                          
                           
                       <tr>
                                   
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><?=  $data['name'] ?></td>
                                  </tr>
                                  
                                  <tr>
                                   
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?=  $data['email'] ?></td>
                                  </tr>
                                  <tr>
                                   
                                    <td>Message</td>
                                    <td>:</td>
                                    <td><?=  $data['message'] ?></td>
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