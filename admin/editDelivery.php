




<?php
require_once('functions.php');
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
  header('Location: login.php');
 // echo "<script language='javascript'> window.location.href = 'login.php'</script>";
  
}
 
 getHeader();
 getSidebar();
 
 if(isset($_POST['update'])){
  $deliveryID = $_POST['deliverID']; 
 $deliveryTitle =  $_POST['deliveryTitle'];
  

  $deliveryDescription =  $_POST['deliveryDescription'];

 
 $photo = $_FILES['deliveryImage'];
 $photoname = '';
     

    


  $update = mysqli_query($connection,"UPDATE `delivery` SET `delivery_title`='$deliveryTitle', `delivery_des`='$deliveryDescription'  WHERE `deliver_id` = '$deliveryID'");

    
    if($update){
      if($photo['name']!=''){
        $photoname = 'alphalineDeliver-'.rand(5000,500000) .'.'. pathinfo($photo['name'],PATHINFO_EXTENSION);
             $updatephoto = mysqli_query($connection,"UPDATE `delivery` SET `delivery_img` = '$photoname' WHERE `deliver_id` = '$deliveryID' ");
             move_uploaded_file($photo['tmp_name'],'../img/'.$photoname);
        }
         echo "<script language='javascript'> window.location.href = 'content.php'</script>";
         
    }
     
}

if(isset($_GET['e'])){
  $deliveryId = $_GET['e'];
  $selQ = mysqli_query($connection,"SELECT * FROM `delivery`  WHERE `deliver_id` ='$deliveryId' ");
$delivery  = mysqli_fetch_assoc($selQ);
}



?>
     
           <div class="row ">
               <div class="col-md-12 main_content">
                 

                <div class="card">

                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i> Edit  delivery</h4></div>
                          <!-- <div class="col-md-4 table_form_btn"> <a  class="btn btn-sm btn-dark card_top_btn"href=""> <i class="fa fa-th"></i> Form</a></div> -->
                      </div>
                    </div>

                    <form action="editDelivery.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="mb-2">
                       <input type="hidden" name="deliverID" value="<?=$delivery['deliver_id'] ?>">
                         <img src="../img/<?= $delivery['delivery_img'] ?>" class="img-fluid h-25 w-50 mx-auto rounded" alt="" srcset=""> <br>
                         <label for="" class="form-label fw-bold mt-1">Change delivery Image:</label>
                         <input type="file" name="deliveryImage" id=""  class="form-control my-1">
                          </div>
                        <div class="mb-2">
                            <label for="name" class="form-label fw-bold">delivery title:</label>
                            <input type="text" class="form-control"  id="formGroupExampleInput" name="deliveryTitle" placeholder="Enter delivery Caption" value="<?= $delivery['delivery_title'] ?>">
                          </div>
         
                          <div class="mb-2">
                            <label for="des" class="form-label fw-bold">delivery Description:</label>
                         <textarea name="deliveryDescription" class="form-control fw-bold" id="deliveryDescription" cols="100%" rows="4" value=""><?= $delivery['delivery_des'] ?></textarea>
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