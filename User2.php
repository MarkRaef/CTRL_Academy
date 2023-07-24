<?php
include 'connections/connection.php';

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php"); // Redirect to login page
    exit();
}

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Fetch user data from the database
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) != 1) {
    // User data not found, redirect to login page
    header("Location: Login.php");
    exit();
}

// User data found, assign user data to variables
$user = mysqli_fetch_assoc($result);
$userId = $user['id'];
$username = $user['username'];
$email = $user['email'];
$age = $user['age'];
$phone = $user['phone'];
$image = $user['image'];

// Fetch reservation data from the database
$reservationQuery = "SELECT * FROM reservation WHERE user_id = '$user_id'";
$reservationResult = mysqli_query($conn, $reservationQuery);

if ($reservationResult && mysqli_num_rows($reservationResult) == 1) {
    // Reservation data found, assign values to variables
    $reservationData = mysqli_fetch_assoc($reservationResult);
    $reservationId = $reservationData['id'];
    $package_name = $reservationData['package_name'];
    $coach_id = $reservationData['coach_id'];
} else {
    // Reservation data not found, handle the case accordingly
    // For example, display an error message or redirect to another page
}



// Fetch coach name from the coach table
$coachName = '';
if (isset($coach_id)) {
    $coachQuery = "SELECT username FROM coach WHERE id = '$coach_id'";
    $coachResult = mysqli_query($conn, $coachQuery);

    if ($coachResult && mysqli_num_rows($coachResult) == 1) {
        $coachRow = mysqli_fetch_assoc($coachResult);
        $coachName = $coachRow['username'];
    }
}

// Fetch club location from the club table
$clubLocation = '';
if (isset($coach_id)) {
    $clubQuery = "SELECT location FROM club WHERE coach_id = '$coach_id'";
    $clubResult = mysqli_query($conn, $clubQuery);

    if ($clubResult && mysqli_num_rows($clubResult) == 1) {
        $clubRow = mysqli_fetch_assoc($clubResult);
        $clubLocation = $clubRow['location'];
    }
}

// Fetch package name from the package table
$packageName = '';
if (isset($coach_id)) {
    $packageQuery = "SELECT package_name
                     FROM reservation
                     WHERE user_id = '$user_id'";
    $packageResult = mysqli_query($conn, $packageQuery);

    if ($packageResult && mysqli_num_rows($packageResult) == 1) {
        $packageRow = mysqli_fetch_assoc($packageResult);
        $packageName = $packageRow['package_name'];
    }
}
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
    <link href="User2.css" rel="stylesheet">
    <link href="css.l/bootstrap.min.css" rel="stylesheet">
     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<style>
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        

      }
      
      th, td {
        text-align: left;
        padding: 20px;
        
      }
      
      tr:nth-child(even){background-color: #f2f2f2}
      </style>
</head>
<body>
  <!--start of header-->
  <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->
    <br>
    <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                      <img src="image/<?php echo $image; ?>" alt="User Profile" Imageclass="rounded" width="300" hight="300">
                        <div class="mt-3">
                          <h4><?php echo $username; ?></h4>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><img src="img/package.jpeg" width="23" height="23" viewBox="0 0 24 24" class="feather feather-globe mr-2 icon-inline"></svg>Package name</h6>
                        <span class="text-secondary"><?php echo $packageName ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><img src="img/person2.jpeg" width="26" height="26" viewBox="0 0 24 24" class="feather feather-globe mr-2 icon-inline"></svg>Coach name</h6>
                        <span class="text-secondary"><?php echo $coachName ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><img src="img/location2.jpeg" width="27" height="27" viewBox="0 0 24 24" class="feather feather-globe mr-2 icon-inline"><!--<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>--></svg>Location</h6>
                        <span class="text-secondary"><?php echo $clubLocation ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">User Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $username; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $email; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $phone; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Age</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $age; ?>years old
                        </div>
                      </div>
                      <hr> 
                      <div class="row">
                        <div class="col-sm-12">
                          
                        </div>
                      </div>
                    </div>
                  </div>
    
<div style="overflow-x:auto;">
<table>
<?php
// Fetch performance data for the logged-in user
$performanceQuery = "SELECT * FROM performance WHERE user_id = '$userId'";
$performanceResult = mysqli_query($conn, $performanceQuery);

if ($performanceResult && mysqli_num_rows($performanceResult) > 0) {
  // Display performance data in a table
  echo '<div style="overflow-x:auto;">
          <table>
            <tr>
              <th>Weeks</th>
              <th>Comments</th>
              <th>Ratings</th>
            </tr>';

  $numRows = mysqli_num_rows($performanceResult);
  $week = 1;

  while ($row = mysqli_fetch_assoc($performanceResult)) {
    echo '<tr>
            <td>Week ' . $week . '</td>
            <td>' . $row['feedback'] . '</td>
            <td>' . $row['score'] . '</td>
          </tr>';

    $week++;

    if ($week > $numRows) {
      break;
    }
  }

  echo '</table>
      </div>';
} else {
  echo 'No performance data available.';
}
?>
</table>
  </div>
  
  </div>
          
       <!--start of footer-->
        <?php include('includes/footer.php'); ?>
       <!-- footer End -->                
                   
    <!-- Back to Top -->
    <div class="container-fluid">
         <a href="#" class="btn btn-primary py-3 fs-8 back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cdn-assets/js/bootstrap.bundle.min.js"></script>  <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
  
  </html>

