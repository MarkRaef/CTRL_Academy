<?php
include 'connections/connection.php';

// Process login form submission
if (isset($_POST['loginsubmit'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    $type = $_POST['type'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Select the table based on the user type
    $table = ($type == 'user') ? 'users' : 'coach';

    // Query the appropriate table to check if the username and password match
    $query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $user = mysqli_fetch_assoc($result);
        $_SESSION['loggedIn'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['type'] = $type;

        // Redirect to the appropriate profile page based on the selected type
        if ($type == 'user') {
            header("Location: User2.php");
            exit();
        } elseif ($type == 'coach') {
            $coachId = $user['id'];
            $_SESSION['coach_id'] = $coachId;
            header("Location: coachprofile.php");
            exit();
        }
    } else {
        // Login failed
        $error = "Invalid username or password";
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
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
     <!--start of header-->
   <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->
    <div class="half">
    
        
        <div class="contents order-2 order-md-1">
    
          <div class="container"  >
            <div class="row align-items-center justify-content-center ">
              <div class="col-md-5 p-4" style="background-color: #A7DA46;">
                <div class="form-block">
                  <div class="text-center mb-5 ">
                  <h3>Login to <strong>CTRL Academy</strong></h3>
                  <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                  </div>
                  
                  <form action="Login.php" method="post">
                    <div class="form-group first">
                      <label for="username">Username</label>
                      <input type="text" name="login_username" class="form-control" placeholder="your-email@gmail.com" id="username">
                    </div>
                    <div class="form-group last mb-3">
                      <label for="password">Password</label>
                      <input type="password" name="login_password" class="form-control" placeholder="Your Password" id="password">
                    
                      <label for="type">Type:</label>
                   <select id="type" name="type">
                       <option value="user">User</option>
                       <option value="coach">Coach</option>
                             </select>
                    
                    <div class="d-sm-flex mb-5 align-items-center">
                      <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me </span>
                        <input type="checkbox" checked="checked"/>
                        <div class="control__indicator"></div>
                      </label>
                      <span class="ml-auto"><a href="#" class="forgot-pass"style="color: black;">&nbsp;Forgot Password</a></span> 
                    </div>
                          
                    <input type="submit" name="loginsubmit" value="Log In" class="btn btn-block btn-primary">
                    <label>
                    </div>
                    <?php
if (isset($error)) {
    echo $error;
}
?>
                    </form>
                    <p>Don't have an Account? <a href="registerbar.php" style="color: black;"> Sign up!</a></p>
            
                </div>
            </div>
                    </label>
                    
    
                  </form>
                </div>
              </div>
            </div>
          </div>
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
 <script src="cdn-assets/js/bootstrap.bundle.min.js"></script> <script src="lib/easing/easing.min.js"></script>
 <script src="lib/waypoints/waypoints.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>
    
        <script src="js.l/jquery-3.3.1.min.js"></script>
        <script src="js.l/popper.min.js"></script>
        <script src="js.l/bootstrap.min.js"></script>
        <script src="js.l/main.js"></script>
      </body>
    </html>