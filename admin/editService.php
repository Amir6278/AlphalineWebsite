




<?php
require_once('functions.php');
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
 header('Location: login.php');
 // exit;
}
 
 getHeader();
 getSidebar();
 
 if(isset($_POST['update'])){
      echo "HEELLO";
  $serviceID = $_POST['serviceID']; 
 $serviceTitle =  $_POST['serviceTitle'];
  
  
  $serviceDescription =  $_POST['serviceDescription'];

 
 $photo = $_FILES['serviceImage'];
 $photoname = '';
     

    


  $update = mysqli_query($connection,"UPDATE `service` SET `service_title`='$serviceTitle', `service_des`='$serviceDescription'  WHERE `service_id` = '$serviceID'");

    
    if($update){
       
        if($photo['name']!=''){
        $photoname = 'alphalineService-'.rand(5000,500000) .'.'. pathinfo($photo['name'],PATHINFO_EXTENSION);
             $updatephoto = mysqli_query($connection,"UPDATE `service` SET `service_img` = '$photoname' WHERE `service_id` = '$serviceID' ");
             move_uploaded_file($photo['tmp_name'],'../img/'.$photoname);
        }
    
 echo "<script language='javascript'> window.location.href ='content.php'</script>";
     
       
         
    }
      
}

if(isset($_GET['e'])){
  $serviceId = $_GET['e'];
  $selQ = mysqli_query($connection,"SELECT * FROM `service`  WHERE `service_id` ='$serviceId' ");
$service  = mysqli_fetch_assoc($selQ);
}



?>
     
           <div class="row ">
               <div class="col-md-12 main_content">
                 

                <div class="card">

                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i> Edit  Service item</h4></div>
                          <!-- <div class="col-md-4 table_form_btn"> <a  class="btn btn-sm btn-dark card_top_btn"href=""> <i class="fa fa-th"></i> Form</a></div> -->
                      </div>
                    </div>

                    <form action="editservice.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="mb-2">
                       <input type="hidden" name="serviceID" value="<?=$service['service_id'] ?>">
                         <img src="../img/<?= $service['service_img'] ?>" class="img-fluid h-25 w-50 mx-auto rounded" alt="" srcset=""> <br>
                         <label for="" class="form-label fw-bold mt-1">Change service Image:</label>
                         <input type="file" name="serviceImage" id=""  class="form-control my-1">
                          </div>
                        <div class="mb-2">
                            <label for="name" class="form-label fw-bold">service title:</label>
                            <input type="text" class="form-control"  id="formGroupExampleInput" name="serviceTitle" placeholder="Enter service Caption" value="<?= $service['service_title'] ?>">
                          </div>
         
                          <div class="mb-2">
                            <label for="des" class="form-label fw-bold">service Description:</label>
                         <textarea name="serviceDescription" class="form-control fw-bold" id="serviceDescription" cols="100%" rows="4" value=""><?= $service['service_des'] ?></textarea>
                         <p class="text-muted">Not more than 200 character</p>
                          </div>
                         
                          
                      
                    </div>

                     <div class="card-footer text-center">
                     <button  type="submit" name ="update" class="btn btn-dark w-100">Update</button>
                     </div>

                    </form>

                  </div>


               </div>
           </div>
       </div>
     


       <?php
         
         getFooter();
   
  
  ?>