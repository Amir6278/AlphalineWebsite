<?php 


 require_once('_header.php');


?>
<a id="backbutton"></a>

    <main>

        <section class="wantToHear px-5" id="about">
            <div class="container">
                <div class="row effect bgHear p-4">
                    <div class="col-md-12">
                        <div class="row  d-flex align-items-center">
                            <div class="col-md-7 py-3 text-center">

                                <h2 class="mb-3">Want To Hear About Our Offered BPO And B2B Telemarketing Support?</h2>
                                <p>Click the “Contact Us” button and fill up our form today</p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4 text-center">
                                <a href="contact.php" class="btn btn-primary btn-lg default-btn px-5 py-2">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="aboutUs mt-5" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="aboutImg mt-5 mx-1" data-aos="fade-right">
                            <img src="img/portrait-call-center-woman-min.jpg" alt="" srcset="">
                        </div>
                    </div>

                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="aboutText mt-5 py-5" data-aos="fade-left">
                            <span>Alphaline Solutions</span>
                            <h2 class="mb-3">Top-Notch Call Center & BPO Services in Bangladesh</h2>
                            <p>
                            Alphaline solution collaborates with you to maintain profitable growth while making it into themodern era expeditiously. Our sales team sells to prospects just over a phone call, these agents
make more sales calls in less time. The result? More deals closed at a lower cost-per-sale.
       We offer full range of outbound, inbound Tele-sales options to promote your products and
        services to decision makers. Alphaline solution is a company currently operating in Bangladesh,
          offering complete customer support, call center solutions, social media marketing, complete
       digital marketing, and Lead generation.
                            </p>
                            <a href="service.php" class="btn btn-primary btn-lg default-btn px-5 py-2 mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services mt-5 bggray pt-2" id="SERVICE">
            <div class="companytext mt-5  mb-2">
                <div class="row">
                    <div class="col-8 text-center mx-auto">
                        <span>OUR EXPERTISE</span>
                        <h2>LET US HELP YOU</h2>
                        <p class="">Hey, it is what we do! Enable the qualified team at Alphaline solutions to help conceptualize,
optimize and build your support program. We are right at your fingertips, reach out to us today
and let us get started with a fresh journey!</p>
                    </div>
                </div>
            </div>

            <div class="servicebox">
               
                <div class="row mb-5">
                <?php
                  $serviceSQL = mysqli_query($connection,"SELECT * FROM `service` WHERE 1 ");
                  while($service = mysqli_fetch_assoc($serviceSQL)){
                  

                ?>
                    <div class="col-md-4 col-sm-12 mb-3" data-aos="fade-down">
                        <div class="serviceitem text-center">
                            <img class="img-fluid w-50" src="img/<?= $service['service_img']; ?>" alt="" srcset="">
                            <div class="Servicetext ">
                                <h3><?= $service['service_title']; ?></h3>
                                <p><?= $service['service_des']; ?></p>
                                <span class="servicelink py-2">
                                    <a href="service.php">learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
                   
                </div>
               
            </div>

        </section>

        <section class="clientSay mt-5">
            <div class="clientdiv px-3">
                <div class="row mt-5">
                    <div class="col-md-6 mt-3">
                        <div class="companytext m-5 py-5">

                            <span class="mb-5">THE REVIEW HAVE BEEN SUBMITTED</span>
                            <h2>What Our Clients Say About Us</h2>
                            <p class="my-3">The client satisfaction oriented approach we always turn to has worked out
                                for us as our clients have shown their approval by awarding us with excellent ratings on
                                all platforms.</p>

                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators text-danger">
                                <?php
                                   $clientSQL = mysqli_query($connection,"SELECT * FROM `clients` ORDER BY client_id DESC ");
                                   $i = 0;
                                   while($clientRow  = mysqli_fetch_assoc($clientSQL)){
                                     $actives = '';
                                    if($i==0){
                                        $actives = 'active';
                                    }
                                   
                                  
                                  ?>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>"
                                    class="<?= $actives ?>" aria-current="true" aria-label="Slide 1"></button>
                                   <?php $i++; }?>
                            </div>
                            <div class="carousel-inner mt-5 ">
                            <?php
                                   $clientSQL = mysqli_query($connection,"SELECT * FROM `clients` ORDER BY client_id DESC ");
                                   $i = 0;
                                   while($clientRow  = mysqli_fetch_assoc($clientSQL)){
                                     $actives = '';
                                    if($i==0){
                                        $actives = 'active';
                                    }
                                   
                                  
                                  ?>
                                  <div class="carousel-item text-center <?= $actives ?>" >
                                    <img src="img/<?=$clientRow['client_img']?> " class="d-block rounded-circle  mx-auto" alt="client Image">
                                    <h4> <?=  $clientRow['client_name']  ?> </h4>
                                    <p><?=  $clientRow['client_des']  ?> </p>
                                </div>
                                <?php $i++; }?>
                              
                                         
                            </div>
                            <button class="carousel-control-prev " type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-orange" aria-hidden="true"></span>
                                <span class="visually-hidden ">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-orange" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="DeliverExellence bggray mt-5 pt-5">

            <div class="row">
                <div class="col-12">
                    <div class="companytext text-center w-100 px-5">

                        <span class="mb-5">WE PRIORITIZE SKILLS MORE THAN ANYTHING ELSE</span>
                        <h2>WHY WOULD YOU CHOOSE ALPHALINE SOLUTIONS
SERVICES?</h2>
                        <p class="my-3">Excellence is something we’ve built over the years with endurance and
                            unstoppable efforts. The services we provide have evolved with time to define us as the best
                            call center in Bangladesh. We have a very simple process to deliver excellence to our
                            clients that helps us achieve this. </p>

                    </div>
                </div>
            </div>
            <div class="row mx-5 mb-5">
            <?php
                  $deliverySQL = mysqli_query($connection,"SELECT * FROM `delivery` WHERE 1 ");
                  while($delivery = mysqli_fetch_assoc($deliverySQL)){
                  

                ?>
                <div class="col-md-4" data-aos="fade-right">
                    <div class="deliverItem">
                        <img src="img/<?= $delivery['delivery_img']; ?>" alt="" srcset="">
                        <h5><?= $delivery['delivery_title']; ?></h5>
                        <p><?= $delivery['delivery_des']; ?></p>
                    </div>

                </div>
              
                <?php } ?>
            </div>
            
        </section>

        <section class="work mt-5">
            <div class="row h-100 d-flex align-items-center mt-3">
                <div class="col-12 text-center px-2">
                    <h2>Our seamless operation as one firm providing BPO services to SME’s and global corporations under
                        one roof.</h2>
                    <a href="" class="btn btn-primary btn-lg default-btn mt-5 px-5 py-2 mx-auto">Work With Us</a>
                </div>
            </div>
        </section>
        
    
    </main>
  <?php
  
  require_once('_footer.php');
  ?>