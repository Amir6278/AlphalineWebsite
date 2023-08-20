<?php
require_once('../_dbConnect.php');
$error = 0;

if(isset($_POST['login']))
{
    $name = $_POST['email'];
    $pass = md5($_POST['apass']);
     echo $pass;
    if(!empty($name)){
        if(!empty($pass)){
             $sq = "SELECT * FROM `admin` WHERE `email`='$name' AND `password` = '$pass' ";
              $qc = mysqli_query($connection,$sq);
              $data = mysqli_fetch_assoc($qc);
             
             if($data){
              //   print_r($data);
                session_start();
                $_SESSION['id'] = $data['id']; 
               
                 $_SESSION['email'] =  $data['email'] ;
                 
                  $_SESSION['loggedIn'] = true;
                 header("Location:index.php");
             }
             else{
                 $error = 1;
                 echo '';
             }

        }

 }
 else{

  $error = 2;

 }
       
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="mycontainer  d-flex justify-content-center my-5">
        <div class="card p-1 border-dark rounded ">
            
            <div class="card-header">Log In to Continue</div>
            <?php 

     if($error==1){
         echo '  <div class="alert alert-danger alert-dismissible fade show fw-bold" role="alert">
         <strong>Error!</strong>   Invalid Credentials!
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
     }
     else if($error==2){
        echo '
        <div class="alert alert-danger alert-dismissible fade show fw-bold" role="alert">
        <strong>Error!</strong>   Enter UserName & Password !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
     }

?>
            <div class="card-body">
                <h5 class="card-title text-center my-3">Alphaline Solutions</h5>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Email:</label>
                        <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label" >Password:</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2" name="apass" placeholder="Enter Password">
                    </div>
                    <input type="checkbox"> <label for="remember" class="">Remember me</label> <br><br>
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button class="btn btn-primary" type="submit" name="login">Log In</button>

                    </div>



                    <a href="http://mohammadamir.rf.gd/?i=1"target="_blank" class="float-left my-2">Need Support?</a>
                </form>
                
            </div>
            <div class="clearfix"></div>
            <div class="card footer">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>