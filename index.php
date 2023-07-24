<?php 

include 'connections/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CTRL Acadmey - CTRL Acadmey Website </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <!--start of header-->
   <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->


    <!-- intro Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">CTRL Acadmey</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Make Your Game Better</h1>
                    <p class="fs-4 text-white mb-lg-4">CTRL Academy will provide you with the best coaches to become a great player."By beginning with achievable tasks and progressing to more challenging ones, you may discover your own ability to perform miracles."</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro End -->


    


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="about image.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep You Better All Time</h1>
                    </div>
                    <h4 class="text-body mb-4">You will become a great player through our Website and your goals.  </h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vission</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">Our mission is to develop the players'performance physically and skillfully in football.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Our vision is to create a generation of egyptian players capable of achieving victory and reaching postions in the world cup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Excellent Academy Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/football2.jpg"style="width: 75px; height: 75px; margin-right: 20px">
                        <div>
                            <h5 class="text-uppercase mb-3">Player Training</h5>
                            <p>We will train you and help you to overcome your weaknesses with the guide of professional coaches </p>
                            <?php if (!isset($_SESSION['loggedIn'])) { ?>
                                <a class="text-primary text-uppercase" href="Login.php">Signup<i class="bi bi-chevron-right"></i></a>
                <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                            <a class="text-primary " href=""></a>
                    <?php 
                      }else{ ?>
                        <a href="" class=""></a> 
                    <?php } ?>
                 
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <img src="img/football.jpg" style="width: 91px; height: 91px; margin-right: 20px">
                        <div>
                            <h5 class="text-uppercase mb-3">Player Reports & Analysis </h5>
                            <p>You will be able to see your progress through analytics and reports made by your coach </p>
                            
                        </div>
                    </div>
                </div>
             
     


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h5 class="text-dark  text-uppercase"> <strong> Special Offer </strong></h5>
                        <h1 class="display-5 text-uppercase text-white mb-0">Reserve Now and start your first trial FOR FREE! </h1>
                    </div>
                    <p class="text-white mb-4"> The more you reserve the less you pay for limited edition.  </p>
                        <?php if (!isset($_SESSION['loggedIn'])) { ?>
                            <a href="Login.php" class="btn btn-light py-md-3 px-md-5 me-3">Sign up Now</a>
                <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                            <a class=" " href=""></a>
                    <?php 
                      }else{ ?>
                        <a href="" class=""></a> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Football Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basic</h2>
                      <!--  <h6 class="text-body mb-5">The Best Choice</h6> -->
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">EGP</small>4000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>1 session for Free </span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>10 sessions</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Analysis and Reports </span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Nutrition Plan</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <?php if (!isset($_SESSION['loggedIn'])) { ?>
                            <a href="service.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                        <a href="service.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Show Our Services</a>
                             <?php 
                                }else{ ?>
                                  <a href="" class=""></a> 
                                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Standard</h2>
                        <h6 class="text-body mb-5">Most Popular</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">EGP</small>6800<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>1 session for Free </span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>20 sessions</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Analysis and Reports </span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Nutrition Plan</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <?php if (!isset($_SESSION['loggedIn'])) { ?>
                            <a href="service.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                        <a href="service.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Show Our Services</a>
                             <?php 
                                }else{ ?>
                                  <a href="" class=""></a> 
                                        <?php } ?>                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Extended</h2>
                      <!-- <h6 class="text-body mb-5">The Best Choice</h6> --> 
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">EGP</small>9200<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>1 session for Free </span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>30 sessions</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Analysis and Reports </span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Nutrition Plan</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <?php if (!isset($_SESSION['loggedIn'])) { ?>
                            <a href="service.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                        <a href="service.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Show Our Services</a>
                             <?php 
                                }else{ ?>
                                  <a href="" class=""></a> 
                                        <?php } ?>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="test-2.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>Best Academy ever. I have developed a lot مدربين على اعلى مستوى</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Mostafa Mohamed</h5>
                            <span>Professional football player at fcnantes </span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="testimonial-1.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>I was coming with no high expections but I was by the results, I become more professional and my playing is much better. I highly recommend this academy. </p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Mohamed Shereif</h5>
                            <span>Professional football player at Al Ahly sc</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<!--start of footer-->
<?php include('includes/footer.php'); ?>
    <!-- footer End -->

    <!-- Back to Top -->
    <div class="container-fluid">
         <a href="#" class="btn btn-primary py-3 fs-8 back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cdn-assets/js/bootstrap.bundle.min.js"></script>    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>