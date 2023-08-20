
<?php 
require_once('_dbConnect.php');
require_once('_functions.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AlphalineSolutions">
    <meta name="keywords" content="callcenter,customerSupport,DigitalMarketing">
    <meta name="author" content="alphaline">


    <title>Alphaline Solutions</title>
    <link rel="icon" href="flogo.png" type="image/icon type">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <header class="header">
      


        <nav class="navbar navbar-expand-lg navbar-light fixed-top ournav">
            <div class="container">
                <a class="navbar-brand ourlogo" href="index.php">
                    <img src="flogo.png" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" class=""aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <div class="d-flex justify-content-center w-100">
                        <ul class="navbar-nav px-5">
                            <li><a  <?php if(getPage() == 'index.php') {echo 'class="active"'; } ?> class="clink"  href="index.php">Home</a></li>
                            <li><a  <?php if(getPage() == 'service.php') {echo 'class="active"'; } ?>     class="clink" href="service.php">Services </a></li>
                            <li><a   <?php if(getPage() == 'contact.php') {echo 'class="active"'; } ?>    class="clink" href="contact.php">Contacts</a></li>

                        </ul>

                    </div>

                </div>
            </div>
        </nav>

        <div class="banner h-100">
        <?php 
        if(getPage() == 'index.php') 
        {
            $bannerSQL = mysqli_query($connection," SELECT * FROM `banner` WHERE `ban_id`='1' ");
            $banner = mysqli_fetch_assoc($bannerSQL);
            
        
        } 
        else if(getPage() == 'service.php') 
        {
            $bannerSQL = mysqli_query($connection," SELECT * FROM `banner` WHERE `ban_id`='2' ");
            $banner = mysqli_fetch_assoc($bannerSQL);
            
        
        } 
        else if(getPage() == 'contact.php') 
        {
            $bannerSQL = mysqli_query($connection," SELECT * FROM `banner` WHERE `ban_id`='3' ");
            $banner = mysqli_fetch_assoc($bannerSQL);
            
        
        } 
        
        
        ?> 
       <style>
            .header{
                background: url('img/<?=$banner['ban_img'];?>') top center no-repeat;
                background-size: cover;
                height: 100vh;
                overflow: hidden;
                position: relative;
                z-index: 1;
            }
            
        </style>


            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                        <div class="container text-left">
                            <div class="bannerText">
                                <h1 class="my-3 d-flex">
                                <?= $banner['ban_title'];?>     
                             </h1>
                                <p class="my-4">
                                <?= $banner['ban_des'];?>  </p>


                                <a href="<?= $banner['ban_url']?>" class="btn btn-primary btn-lg default-btn px-5 py-2" id="spbtn"><?= $banner['ban_btn'];?>  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>