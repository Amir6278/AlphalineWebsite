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
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i>Clients</h4></div>
                          <div class="col-md-4 table_form_btn"> <a  class="btn btn-sm btn-dark card_top_btn"href="addClient.php"> <i class="fa fa-th"></i> Add new Client</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                        
                            <thead>
                              <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Client Name</th>
                
                                <th scope="col">Client Description</th>
                                <th scope="col">Client Image</th>
                                <th scope="col" width="5%">Actions</th>
                                
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php  
                          $selectSQL = "SELECT * FROM `clients` ";
                        
                       $select = mysqli_query($connection,$selectSQL);
                             if(mysqli_num_rows($select) == 0){
                                   echo 'No Client found';
                             }
                              else{
                                $i=1;
                                while($client = mysqli_fetch_assoc($select)){
                                
                          ?>
                              <tr>
                                <th scope="row"> <?= $i++; ?>   </th>
                                <th scope="row"> <?= $client['client_name'] ?>   </th>
                               
                              
                                
                                <td><?= $client['client_des'] ?> </td>
                                <td><img src="../img/<?=$client['client_img'] ?>" class="img-fluid rounded w-50"  alt="CLient Image" srcset=""> </td>

                             

                              
                                <td>
                                <a href="viewClient.php?v=<?= $client['client_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="editClient.php?e=<?= $client['client_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                    <a href="deleteClient.php?d=<?= $client['client_id']; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-lg"></i></a>
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
     