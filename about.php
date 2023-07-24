<?php 
include 'connections/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CTRL Academy </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Football Academy" name="keywords">
    <meta content="Football Academy" name="description">

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
                    <h4 class="text-body mb-4">You will become a great player through our Website and your goals. </h4>
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
                                <p class="mb-0">Our vision is to create a generation of egyptian players capable of achieving victory and reaching postions in the world cup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!--Know us-->
            <div class="container-fluid py-5"> 
    <img src="img/abt1.jpg" style="width: 35%; float: right; ">
    <div class="row gx-5">    
            <div class="position-relative h-100">
    <div>

            <section>
    <h2 style= "color: #7AB730; margin-right:50px;">Who are we? </h2>
    <p style="font-size: 20px;">We are a team of BIS students from Helwan University who create service and business plans based on our graduation project (CTRL Academy). The sport in the country has faced many challenges and problems, 
        including a lack of investment in sports and the lack of quality among Egyptian players. We mainly thought about this project to help improving the quality of the Egyptian players
     by addressing the challenges facing them and working on it.</p>
  </section>
  
  <section>
    <h2 style= "color: #7AB730;">If you are wondering why we chose this name!</h2>
    <p style="font-size: 20px ;">CTRL is an abbreviation for the word control, and it is a word that has importance in football. Controlling the ball is the single most important skill in football as it means the ability to tame the ball smoothly.</p>
  </section> 
 
</div>
</div>
</div>
</div>
</div>
<!--Know us-->
    <!-- OURVALUES Start -->
<div class="container mb-5">
    <h3 class="  text-uppercase border-start border-5 border-primary ps-3 mb-4">Our values </h3>
    <div class="justify-content-center">
        <a class="h5 bg-light py-2 px-5 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Humility</a>
        <a class="h5 bg-light py-2 px-4 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Commitment</a>
        <a class="h5 bg-light py-2 px-5 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Team Work</a>
        <a class="h5 bg-light py-2 px-5 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Respect</a>
        <a class="h5 bg-light py-2 px-4 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Excellence</a>
    </div>
</div>
<!-- OURVALUES End -->
    <!-- About End -->


    


    <!-- Team End -->

     <!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-start">
            <div class="col-lg-7">
                <div class="border-start border-5 border-dark ps-5 mb-5">
                    <h5 class="text-dark  text-uppercase"> <strong> Special Offer </strong></h5>
                    <h1 class="display-5 text-uppercase text-white mb-0">Subscribe Now and start your first trial FOR FREE! </h1>
                
                </div>
                <p class="text-white mb-4">Subscribe now for your free trial </p>
                
                <?php if (!isset($_SESSION['loggedIn'])) { ?>
                    <a href="Login.php" class="btn btn-light py-md-3 px-md-5 me-3">Subscribe Now</a>              
                      <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                        <a href="price.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Show Our packages</a>
                             <?php 
                                }else{ ?>
                                  <a href="" class=""></a> 
                                        <?php } ?>
                
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

   <!--start of footer-->
   <?php include('includes/footer.php'); ?>
    <!-- footer End -->


    <!-- Back to Top -->
    <div class="container-fluid">
         <a href="#" class="btn btn-primary py-3 fs-8 back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cdn-assets/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js\main.js"></script>
    
</body>

</html>