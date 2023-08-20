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
                 

                <div class="card">

                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i>Contents</h4></div>
                        
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover custom_view_table" id="myTable">
                        
                            <thead>
                              <tr>
                           
                                <th scope="col">Item Caption</th>
                                <th scope="col">Item Description</th>
                                <th scope="col">Item Image</th>
                                
                                
                                <th scope="col">Actions</th>
                                
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php  
                          $selectSQL = "SELECT * FROM `service` ";
                       $select = mysqli_query($connection,$selectSQL);
                             if(mysqli_num_rows($select) == 0){
                                   echo 'No Service found';
                             }
                              else{
                                
                                while($service = mysqli_fetch_assoc($select)){
                                
                          ?>
                              <tr>
                              

                                <th scope="row"> <?= $service['service_title'] ?>   </th>
                              
                                <td><?= $service['service_des'] ?> </td>
                                <td> <img  src="../img/<?= $service['service_img'] ?>" class="img-fluid mx-auto w-50" width="100%"  alt="" srcset="">   </td>
                                
                              

                             

                              
                                <td>
                               
                                    <a href="editService.php?e=<?= $service['service_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                  
                                </td>
                                </tr>
                              <?php
                                }
                              }
                              ?>
                                   <?php  
                          $deliverySQL = "SELECT * FROM `delivery` ";
                       $deliveryR = mysqli_query($connection,$deliverySQL);
                             if(mysqli_num_rows($deliveryR) == 0){
                                   echo 'No Service found';
                             }
                              else{
                                
                                while($delivery = mysqli_fetch_assoc($deliveryR)){
                                
                          ?>
                              <tr>
                             

                                <th scope="row"> <?= $delivery['delivery_title'] ?>   </th>
                              
                                <td><?= $delivery['delivery_des'] ?> </td>
                                <td> <img  src="../img/<?= $delivery['delivery_img'] ?>" class="img-fluid mx-auto w-50" width="100%"  alt="" srcset="">   </td>
                                
                              

                             

                              
                                <td>
                               
                                    <a href="editDelivery.php?e=<?= $delivery['deliver_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                  
                                </td>
                                </tr>
                              <?php
                                }
                              }
                              ?>




                            </tbody>
                          </table>
                    </div>
                     <div class="card-footer">
                         .
                     </div>
                  </div>


               </div>
           </div>
       </div>



       <?php
         
         getFooter();
   
  
  ?>
     