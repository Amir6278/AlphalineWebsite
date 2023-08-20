   <?php 
   
   
     require_once('_header.php');
    


   
   ?>
<a id="backbutton"></a>
    <main>



        <section class="contact mx-3" id="CONTACT">

            <div class="row mx-2">
                <div class="col-md-6 mt-5" data-aos="fade-right">
                    <div class="row">
                        <img src="img/523881.jpg" class="w-50 rounded-circle mt-2 img-fluid" alt="" srcset="">
                        <h4 class="w-75 mt-5">Send us a message or call now to speak to a Marketing Consultant!</h4>
                    </div>
                    <div class="row mx-3 mt-3">
                        <ul>
                            <li>Secure your appointment
                               
                                
                             </li>
                                <li> Tell us about your business</li>
                                <li>Find out if we’re a good fit</li>
                                <li>   Get the specifics about our services</li>
                        </ul>
                    </div>
                    <div class="row callrow mt-5">
                        
                      <div class="col-2 text-end">
                             <span class="callI">  <i class="fa-solid fa-phone"></i></span>
                      </div>
                        <div class="col-8 text-start">
                            <a href="tel:+8801727857316">
                               <span>+8801727857316</span>
                            </a>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row callrow mt-5">
                        
                        <div class="col-2 text-end">
                               <span class="callI">  <i class="fa-solid fa-envelope-open-text"></i></span>
                        </div>
                          <div class="col-8 text-start">
                              <a href="mailto:office@alphalinebpo.com">
                                 
                                 <span>office@alphalinebpo.com</span>
                              </a>
                          
                          </div>
                          <div class="col-2"></div>
                      </div>
                      <div class="d-flex justify-content-center mt-5 w-75" >
                         <div class="clinks" data-aos="flip-up">
                            <i class="fa-brands fa-facebook-f"></i>
                         </div>
                         <div class="clinks" data-aos="flip-right">
                            <i class="fa-brands fa-google"></i>
                         </div>
                         <div class="clinks" data-aos="flip-left">
                            <i class="fa-brands fa-twitter"></i>
                         </div>
                      </div>
                </div>
                <div class="col-md-6">


                    <div class="contactForm py-5 w-100" data-aos="fade-left">
                        <h6>
                            Get Free Consultation
                        </h6>
                        <form action="" method="post">
                            <label for="name" class="form-label">Your Name : </label><br>
                            <input type="text" name="name" placeholder="john Doe" class="form-control mb-0" id="name"> <br>
                            <p class="form-text mb-3 text-danger fw-bold" id="nameError"></p>
                            <label for="email" class="form-label">Your Email : </label><br>
                            <input type="email" class="form-control" name="email" placeholder="info@example.com" id="email"> <br>
                            <p class="form-text mb-3 text-danger fw-bold" id="emailError"></p>
                            <label for="name">Your Message: </label> <br>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea> <br>
                            <button type="submit" id="sent" class="btn btn-lg btn-outline-primary" name="send" onclick="return validate(event)">Send</button>

                        </form>
                    </div>




                </div>
            </div>



        </section>







    </main>
    <?php 
   
   
   require_once('_footer.php');
 

   if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['send'])){

          $name = htmlentities($_POST['name']);
          $email = htmlentities($_POST['email']);
          $message =htmlentities($_POST['message']);


         $insertSQL   =  "INSERT INTO `contacts`(`name`, `email`, `message`) VALUES ('$name','$email','$message') ";

         $msg = 'Name :' . $name . 'Email : ' . $email . 'message : ' . $message;
         $result = mysqli_query($connection,$insertSQL);
        
         if($result){
          echo '<script type="text/javascript">
                  showSuccess();
          </script>';
          
   }
   if($result){
    mail("office@alphalinebpo.com","Website Contact Message : ",$msg);
       }
   else{

    echo '<script type="text/javascript">
    showError();
</script>';

   }
   }
  
 
 ?>



            