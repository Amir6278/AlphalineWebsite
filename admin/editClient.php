

<?php
require_once('functions.php');
session_start();
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
   header('Location: login.php');
 
  
}
 
 getHeader();
 getSidebar();
 

 if(isset($_POST['update'])){
  $clientID = $_POST['clientID']; 
  $clientName =  $_POST['clientName'];
  

  $clientDescription =  $_POST['clientDescription'];

 
 $photo = $_FILES['clientImage'];
 $photoname = '';
     

    
;

echo $update = mysqli_query($connection," UPDATE `clients` SET `client_name`='$clientName',`client_des`='$clientDescription'  WHERE `client_id` = '$clientID'");

    
    if($update){
      if($photo['name']!=''){
        $photoname = 'Alphaclient-'.rand(5000,500000) .'.'. pathinfo($photo['name'],PATHINFO_EXTENSION);
             $updatephoto = mysqli_query($connection,"UPDATE `clients` SET `client_img` = '$photoname' WHERE `client_id` = '$clientID' ");
             move_uploaded_file($photo['tmp_name'],'../img/'.$photoname);
        }
           echo "<script language='javascript'> window.location.href = 'client.php'</script>";
    }
 

 


}

if(isset($_GET['e'])){
  $clientId = $_GET['e'];
  $selQ = mysqli_query($connection,"SELECT * FROM `clients`  WHERE `client_id` ='$clientId' ");
$client  = mysqli_fetch_assoc($selQ);
}
?>
     
           <div class="row ">
               <div class="col-md-12 main_content">
                 

                <div class="card">

                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i> Edit  client</h4></div>
                          <!-- <div class="col-md-4 table_form_btn"> <a  class="btn btn-sm btn-dark card_top_btn"href=""> <i class="fa fa-th"></i> Form</a></div> -->
                      </div>
                    </div>

                    <form action="editClient.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="mb-2">
                       <input type="hidden" name="clientID" value="<?=$client['client_id'] ?>">
                         <img src="../img/<?= $client['client_img'] ?>" class="img-fluid h-25 w-50 mx-auto rounded" alt="" srcset=""> <br>
                         <label for="" class="form-label fw-bold mt-1">Change client Image:</label>
                         <input type="file" name="clientImage" id=""  class="form-control my-1">
                          </div>
                        <div class="mb-2">
                            <label for="name" class="form-label fw-bold">client Name:</label>
                            <input type="text" class="form-control"  id="formGroupExampleInput" name="clientName" placeholder="Enter Banner Caption" value="<?= $client['client_name'] ?>">
                          </div>
                     
                          <div class="mb-2">
                            <label for="des" class="form-label fw-bold">client Description:</label>
                         <textarea name="clientDescription" class="form-control fw-bold" id="bannerDescription" cols="100%" rows="4" value=""><?= $client['client_des'] ?></textarea>
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