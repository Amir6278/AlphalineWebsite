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
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i>   Message's</h4></div>
                         
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                        
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                               
                                <th scope="col">Message</th>
                                <th scope="col" width="2%">Actions</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                            <?php  
                          $selectSQL = "SELECT * FROM `contacts` ORDER BY `id` DESC ";
                       $select = mysqli_query($connection,$selectSQL);
                             if(mysqli_num_rows($select) == 0){
                                   echo 'No Message found';
                             }
                              else{
                                while($message = mysqli_fetch_assoc($select)){
                               
                          ?>
                              <tr>
                            
                                <td  scope="row"><?= $message['name'] ?></td>
                                <td><?= $message['email'] ?></td>
                                
                                <td><?= substr($message['message'],0,80)?>...</td>
                                <td>
                                <a href="viewMessage.php?v=<?= $message['id'];  ?>" target="_blank"><i class="fa fa-plus-square fa-lg"></i></a>

                                <a href="deleteMessage.php?d=<?= $message['id'];  ?>" target="_blank"><i class="mx-1 fa fa-trash  fa-lg"></i></a>
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
     