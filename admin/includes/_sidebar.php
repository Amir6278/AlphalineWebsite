<style>
  .active{
    background-color: #4c609c;
  }
</style>

<section>


        <div class="container-fluid content_part_full">
        <div class="row">
       <div class="col-md-2 sidebar_part">
         <div class="user_part">
       <img src="images/avatar.png" alt="" srcset="">'
      
          <h4>Admin </h4>
          <p><i class="fa fa-circle"></i>  Online</p>
         </div>
         <div class="menu">
            <ul>
                <li><a <?php if(getPage() == 'index.php' ) {echo 'class="active"'; } ?>  href="index.php"><i class="fa fa-home"></i>  Dashboard</a></li>
                <li><a <?php if(getPage() == 'banner.php') {echo 'class="active"'; } ?> href="banner.php"><i class="fa fa-bandcamp"></i> Banner </a></li>
                <li><a <?php if(getPage() == 'client.php') {echo 'class="active"'; } ?> href="client.php"><i class="fa fa-users"></i> Clients </a></li>
                <li><a <?php if(getPage() == 'content.php') {echo 'class="active"'; } ?> href="content.php"><i class="fa fa-edit"></i> Contents </a></li>
                <li><a <?php if(getPage() == 'allMessage.php') {echo 'class="active"'; } ?> href="allMessage.php"><i class="fa fa-envelope"></i>  Contacts </a></li>
       
                <li><a href="logout.php" onclick="return confirm('Do you want to Log out  ?')"><i class="fa fa-power-off"></i>  Logout</a></li>
              </ul>
         </div>
       </div>
       <div class="col-md-10 content_part">
         <div class="row custom_bread_part">
             <div class="col-md-12 bread">
                <ul>
                      <li class="mx-2" aria-current="page"><a href="index.php"> <i class="fa fa-home"></i> Home</a> </li>
                   
                     
                </ul>
                  
                  
             </div>
         </div>