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
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i>Banners</h4></div>
                   
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                        
                            <thead>
                              <tr>
                              <th scope="col">Page Name</th>
                                <th scope="col">Banner Caption</th>
                                <th scope="col">Banner Description</th>
                                <th scope="col">Banner Image</th>
                                <th scope="col">Banner Button</th>
                                
                                <th scope="col">Actions</th>
                                
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php  
                          $selectSQL = "SELECT * FROM `banner` ";
                       $select = mysqli_query($connection,$selectSQL);
                             if(mysqli_num_rows($select) == 0){
                                   echo 'No Banner found';
                             }
                              else{
                                
                                while($banner = mysqli_fetch_assoc($select)){
                                
                          ?>
                              <tr>
                              <th scope="row"> <?= $banner['page_name'] ?>   </th>
                                <th scope="row"> <?= $banner['ban_title'] ?>   </th>
                              
                                <td><?= $banner['ban_des'] ?> </td>
                                <td> <img  src="../img/<?= $banner['ban_img'] ?>" class="img-fluid mx-auto" width="100%"  alt="" srcset="">   </td>
                                <td><?= $banner['ban_btn'] ?> </td>
                              

                             

                              
                                <td>
                                <a href="viewBanner.php?v=<?= $banner['ban_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="editBanner.php?e=<?= $banner['ban_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                  
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
     