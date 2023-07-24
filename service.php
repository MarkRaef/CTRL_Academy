<?php
require_once('connections/connection.php');
if(isset($_POST['choose_coach']) && $_SESSION['type'] === 'user'){
    $coach_id = $_POST['coach_id'];
    $package_name = $_POST['package_name'];
    
    $insert = "INSERT INTO `reservation` (`user_id`,`coach_id`,`package_name`) VALUES(".$_SESSION['user_id'].",'$coach_id','$package_name')";
    $submit_reserve = mysqli_query($conn, $insert);
    if($submit_reserve){
        echo "Submitted successfully";
    }
}
$query = "SELECT * FROM coach";
$result = mysqli_query($conn, $query);

if ($result) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Store the column values in variables
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $age = $row['age'];
        $phone = $row['phone'];
        $image = $row['image'];
        $password = $row['password'];
        $type = $row['type'];
    }

    // Free the result set
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CTRL Academy</title>
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
    <style>
        .button {
            border: none;
            color: white;
            padding: 4px 4px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 8px 4px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: ghostwhite;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <!--start of header-->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->

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
                        <img src="img/football2.jpg" style="width: 75px; height: 75px; margin-right: 20px">
                        <div>
                            <h5 class="text-uppercase mb-3">Player Training</h5>
                            <p>We will train you and help you to overcome your weaknesses with the guide of professional coaches </p>
                            <?php if (!isset($_SESSION['loggedIn'])) { ?>
                                <a class="text-primary text-uppercase" href="registerbar.php">Signup<i class="bi bi-chevron-right"></i></a>
                      <?php }?>
                    <?php if (isset($_SESSION['loggedIn'])) { ?>                    
                        <a href="" class=""></a>
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

                <!-- Services End -->



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
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">EGP</small>4000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/
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
                                    </div> 
                                    <?php if (!isset($_SESSION['loggedIn'])) { ?>
                                        <a href="Login.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['loggedIn'])) { ?>
                                        <a href="payment.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light text-center pt-5">
                                    <h2 class="text-uppercase">Standard</h2>
                                    <h6 class="text-body mb-5">Most Popular</h6>
                                    <div class="text-center bg-dark p-4 mb-2">
                                        <h1 class="display-4 text-white mb-0">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">EGP</small>6800<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/
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
                                    </div> <?php if (!isset($_SESSION['loggedIn'])) { ?>
                                        <a href="Login.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['loggedIn'])) { ?>
                                        <a href="payment.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light text-center pt-5 mt-lg-5">
                                    <h2 class="text-uppercase">Extended</h2>
                                    <!-- <h6 class="text-body mb-5">The Best Choice</h6> -->
                                    <div class="text-center bg-primary p-4 mb-2">
                                        <h1 class="display-4 text-white mb-0">
                                            <small class="align-top" style="font-size: 22px; line-height: 45px;">EGP</small>9200<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/
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
                                        </div> <?php if (!isset($_SESSION['loggedIn'])) { ?>
                                            <a href="Login.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                                        <?php } ?>
                                        <?php if (isset($_SESSION['loggedIn'])) { ?>
                                            <a href="payment.php" class="btn btn-primary text-uppercase py-2 px-4 my-3">Subscribe Now</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing Plan End -->

                <!-- Team Start -->
                <div class="container-fluid py-5">
                    <div class="container">
                        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                            <h6 class="text-primary text-uppercase">Team Members</h6>
                            <h1 class="display-5 text-uppercase mb-0">Our qualified and professional coaches!</h1>
                            <p> If You Want To Know More About Our Coaches Please <a href="team.php">PRESS HERE</a></p>
                        </div>
                        <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                        <?php
$select_coaches = "SELECT * FROM `coach`";
$coaches_query = mysqli_query($conn, $select_coaches);

$hasCoach = false; // Flag variable

while ($result = mysqli_fetch_array($coaches_query)) {
    $coachId = $result['id'];
    if(isset($_SESSION['user_id'])){
        $userId = $_SESSION['user_id'];
        
        // Check if the user already has a coach
        $checkReservationQuery = "SELECT * FROM reservation WHERE user_id = $userId";
        $reservationResult = mysqli_query($conn, $checkReservationQuery);

    }else{
        
        // Check if the user already has a coach
        $checkReservationQuery = "SELECT * FROM reservation  WHERE user_id = 0";
        $reservationResult = mysqli_query($conn, $checkReservationQuery);
    }

    if (mysqli_num_rows($reservationResult) > 0) {
        $hasCoach = true; // Set the flag to true
    } else {
        $image = $result['image']; // Retrieve the image path from the database

        ?>
        <div class="team-item">
            <div class="position-relative overflow-hidden">
                <img src="image/<?php echo $image; ?>" class="img-fluid w-100" alt="Coach Image">

                <div class="team-overlay">
                    <div class="d-flex align-items-center justify-content-start">
                        <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-light text-center p-4">
                <h5 class="text-uppercase"><?= $result['username'] ?></h5>
                
                <?php if(isset($_SESSION['user_id'])) { ?>

                <?php if($_SESSION['type'] == 'user') { ?>
                    <form method="POST">
                        <input type="hidden" name="coach_id" value="<?= $result['id'] ?>">

                                        
                        <!-- Other form fields -->
                        <?php if (!$hasCoach) { ?>
                            <input type="radio" id="basic" name="package_name" value="basic">
                            <label for="basic">Basic</label><br>
                            <input type="radio" id="standard" name="package_name" value="standard">
                            <label for="standard">Standard</label><br>
                            <input type="radio" id="extended" name="package_name" value="extended">
                            <label for="extended">Extended</label>
                        <?php } else { ?>
                            <input type="radio" id="basic" name="package_name" value="basic" disabled>
                            <label for="basic">Basic</label><br>
                            <input type="radio" id="standard" name="package_name" value="standard" disabled>
                            <label for="standard">Standard</label><br>
                            <input type="radio" id="extended" name="package_name" value="extended" disabled>
                            <label for="extended">Extended</label>
                        <?php } ?>
    



                        <?php if (!isset($_SESSION['loggedIn'])) { ?>
                            <a href="login.php" class="button button1" type="submit" name="choose_coach">Choose</a>
                        <?php } elseif (!$hasCoach) { ?>
                            <button class="button button1" type="submit" name="choose_coach">Choose</button>
                        <?php } ?>
                    </form>
                <?php } ?>
                <?php } ?>

                <?php if (!isset($_SESSION['loggedIn'])) { ?>
                            <a href="login.php" class="button button1" type="submit" name="choose_coach">Choose</a>
                <?php } ?>

            </div>
        </div>
        <?php
    }
}

// Handle the form submission and store the reservation in the database
if (isset($_POST['choose_coach'])) {
    $coachId = $_POST['coach_id'];
    $userId = $_SESSION['user_id'];
    $package_name = $_POST['package_name'];

    // Check if the user already has a coach
    $checkReservationQuery = "SELECT * FROM reservation WHERE user_id = $userId";
    $reservationResult = mysqli_query($conn, $checkReservationQuery);

    if (mysqli_num_rows($reservationResult) > 0) {
        // User already has a coach, handle accordingly (e.g., redirect or display a message)
        echo "You already have a coach.";
    } else {
        // Perform the reservation and store it in the database
        // Your code to store the reservation goes here
        echo "Reservation successful!";
    }
}
?>


                        </div>
                    </div>
                </div>
                <!-- Team End -->

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
                <script src="js/main.js"></script>

</body>

</html>