<?php
include 'connections/connection.php';

if (isset($_POST['signup_submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phone_number'];
    $birthdate = $_POST['birthdate'];
    $type = $_POST['type'];

    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = 'image/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
  
    // Calculate age based on birthdate
    // Create a DateTime object for the birth date
       $birthDate = new DateTime($birthdate);

    // Get the current date
       $currentDate = new DateTime();

    // Calculate the difference between the birth date and the current date
        $age = $currentDate->diff($birthDate)->y;

    // Display the age
            echo "Age: " . $age;

 
    if ($type === 'user') {
        // Insert data into the users table
        $query = "INSERT INTO users (username, email, password, age, phone, type, image) 
                  VALUES ('$username', '$email', '$password', '$age', '$phoneNumber', '$type', '$image_name')";
    } elseif ($type === 'coach') {
        // Insert data into the coach table
        $query = "INSERT INTO coach (username, email, password, age, phone, type, image) 
                  VALUES ('$username', '$email', '$password', '$age', '$phoneNumber', '$type', '$image_name')";
    } else {
        echo "Invalid type";
        exit();
    }
    

    if (mysqli_query($conn, $query)) {
        echo "Registration successful!";
        header("Location: Login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
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

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="Registration.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->

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

    <!-- Registeration -->

    <!-- main -->
    <div class=" Registeration" >
	 <div class="main-w3layouts wrapper">
		<h1>Register Now!</h1>
		<div class="main-agileinfo">
			 <div class="agileits-top"> 
				<form action="" method="post" enctype="multipart/form-data">
					
				
					
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<input class="text1" type="text" name="phone_number" placeholder="Phone number" required="">
                    <input class="text2" type="date" name="birthdate" placeholder="Birth date" required>
                    <input type="file" name="image"/>
                    <label for="type">Type:</label>
                    <select id="type" name="type">
                                <option value="user">User</option>
                                <option value="coach">Coach</option>
                   </select>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
                        
                        <button type="submit" name="signup_submit">Signup</button>                   
                        </form>

		</div>
    </div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->

    <!--start of footer-->
    <?php include('includes/footer.php'); ?>
    <!-- footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cdn-assets/js/bootstrap.bundle.min.js"></script>    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>