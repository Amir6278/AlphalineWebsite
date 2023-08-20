
<?php
require_once('functions.php');
session_start();
 
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=true){
//   header('Location: ');
   header('Location: login.php');
}



 
 getHeader();
 getSidebar();

 if(isset($_POST['update'])){
  $bannerID = $_POST['bannerID']; 
 $bannerTitle =  $_POST['BannerTitle'];
  
  $banBtn =  $_POST['bannerButton'];
  $bannerDescription =  $_POST['bannerDescription'];

 
 $photo = $_FILES['BannerImage'];
 $photoname = '';
     

    


  $update = mysqli_query($connection,"UPDATE `banner` SET `ban_title`='$bannerTitle', `ban_des`='$bannerDescription',`ban_btn`='$banBtn'  WHERE `ban_id` = '$bannerID'");

    
    if($update){
      if($photo['name']!=''){
        $photoname = 'alphaline-'.rand(5000,500000) .'.'. pathinfo($photo['name'],PATHINFO_EXTENSION);
             $updatephoto = mysqli_query($connection,"UPDATE `banner` SET `ban_img` = '$photoname' WHERE `ban_id` = '$bannerID' ");
             move_uploaded_file($photo['tmp_name'],'../img/'.$photoname);
        }
 echo "<script language='javascript'> window.location.href = 'banner.php'</script>";         
    }
     
}

if(isset($_GET['e'])){
  $bannerId = $_GET['e'];
  $selQ = mysqli_query($connection,"SELECT * FROM `banner`  WHERE `ban_id` ='$bannerId' ");
$banner  = mysqli_fetch_assoc($selQ);
}



?>

     
           <div class="row ">
               <div class="col-md-12 main_content">
                 

                <div class="card">

                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-8"><h4 class="card_header_title"> <i class="fa fa-gg-circle"></i> Edit  Banner</h4></div>
                          <!-- <div class="col-md-4 table_form_btn"> <a  class="btn btn-sm btn-dark card_top_btn"href=""> <i class="fa fa-th"></i> Form</a></div> -->
                      </div>
                    </div>

                    <form action="editBanner.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="mb-2">
                       <input type="hidden" name="bannerID" value="<?=$banner['ban_id'] ?>">
                         <img src="../img/<?= $banner['ban_img'] ?>" class="img-fluid h-25 w-50 mx-auto rounded" alt="" srcset=""> <br>
                         <label for="" class="form-label fw-bold mt-1">Change Banner Image:</label>
                         <input type="file" name="BannerImage" id=""  class="form-control my-1">
                          </div>
                        <div class="mb-2">
                            <label for="name" class="form-label fw-bold">Banner title:</label>
                            <input type="text" class="form-control"  id="formGroupExampleInput" name="BannerTitle" placeholder="Enter Banner Caption" value="<?= $banner['ban_title'] ?>">
                          </div>
         
                          <div class="mb-2">
                            <label for="des" class="form-label fw-bold">Banner Description:</label>
                         <textarea name="bannerDescription" class="form-control fw-bold" id="bannerDescription" cols="100%" rows="4" value=""><?= $banner['ban_des'] ?></textarea>
                         <p class="text-muted">Not more than 200 character</p>
                          </div>
                         
                          <div class="mb-2">
                            <label for="name" class="form-label fw-bold">Banner button name:</label>
                            <input type="text" class="form-control"  id="formGroupExampleInput" name="bannerButton" placeholder="Enter Banner button name" value="<?= $banner['ban_btn'] ?>">
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