<?php
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
  header('Location: login.php');
  exit;
}
 require_once('functions.php');
 getHeader();
 getSidebar();

 $clientID = $_GET['v'];

 $selQ = mysqli_query($connection,"SELECT * FROM `clients` WHERE `client_id` ='$clientID' ");

 while($client  = mysqli_fetch_assoc($selQ)){

//  print_r($data);

?>
    
           <div class="row">
            
               <div class="col-md-12 main_content">
                <div class="card">
                    <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> client information</h4>

                        </div>
                        <div class="col-md-4 table_form_btn"> <a class="btn btn-sm btn-dark card_top_btn" href="addClient.php"><i class="fa fa-th"></i> Add new client </a></div>
                        
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-2">
                           
                          </div>
                          <div class="col-md-8">
                            <div class="col-12 text-center h-50" >
                            <img src="../img/<?= $client['client_img'] ?>" class="rounded h-100 w-50 rounded-circle img-fluid w-50 border-3 py-3" alt="" srcset="">
                            </div>
                            <table class="table mb-3 table-bordered table-striped table-hover custom_view_table py-3">
                               
                          
                           
                       <tr>
                                   
                                    <td>client Name:</td>
                                    <td>:</td>
                                    <td><?=  $client['client_name'] ?></td>
                                  </tr>
                                
                                   
                                    <td>client Description:</td>
                                    <td>:</td>
                                    <td><?=  $client['client_des'] ?></td>
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