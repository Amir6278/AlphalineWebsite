<?php
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
  header('Location: login.php');
  exit;
}
 require_once('functions.php');
 getHeader();
 getSidebar();

 if(isset($_POST['register'])){

   $clientName =  $_POST['clientName'];

    $clientDescription =  $_POST['clientDescription'];
  
   
   $photo = $_FILES['clientImage'];
   $photoname = '';
     

            if($photo['name']!=''){
          $photoname = 'Alphaclient-'.rand(10,2000) .'.'. pathinfo($photo['name'],PATHINFO_EXTENSION);


            }
           
         
          $insertSQL = " INSERT INTO `clients`( `client_name`, `client_des`, `client_img`) VALUES ('$clientName',' $clientDescription','$photoname') ";

          $insert = mysqli_query($connection,$insertSQL);
          if($insert){
             move_uploaded_file($photo['tmp_name'],'../img/'.$photoname);
            echo '<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <strong>Success!</strong> Client Added  Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ' ;
          
          }
          else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Client couldn`t add
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }

        

 


 }


?>
   
           <div class="row ">
               <div class="col-md-12 main_content">
                 

                <div class="card">

                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i> Add New Client</h4></div>
                          <!-- <div class="col-md-4 table_form_btn"> <a  class="btn btn-sm btn-dark card_top_btn"href=""> <i class="fa fa-th"></i> Form</a></div> -->
                      </div>
                    </div>

                    <form action="addClient.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="name" class="form-label fw-bold">Client name:</label>
                            <input type="text" class="form-control"  id="formGroupExampleInput" name="clientName" placeholder="Enter Client Name">
                          </div>
                      
                          <div class="mb-2">
                            <label for="des" class="form-label fw-bold">Client Description:</label>
                         <textarea name="clientDescription" class="form-control" id="clientDescription" cols="100%" rows="4" placeholder="...."></textarea>
                         <p class="text-muted">Not more than 200 character</p>
                          </div>
                          <div class="mb-2">
                            <label for="img" class="form-label fw-bold">Client Image:</label>
                            <input type="file" class="form-control" id="formGroupExampleInput2" name="clientImage"  placeholder="Enter Banner Image">
                          </div>
                        
                          
                       
                    </div>

                     <div class="card-footer text-center">
                       <button type="submit" class="btn btn-dark p-2" name="register">Add Client</button>
                     </div>

                    </form>

                  </div>


               </div>
           </div>
       </div>

       <?php
         
         getFooter();
   
  
  ?>
     