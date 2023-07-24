<?php
include 'connections/connection.php';

if (isset($_POST['submit'])) {
  $location = $_POST['location'];
  $coachId = $_SESSION['coach_id'];

  $sql = "INSERT INTO club (location, coach_id) VALUES ('$location', '$coachId')";
  if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
       
    <style>
        
    /*style the switch */
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #2196F3;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.coachrequestform{
    font-size: large;
}
.caption{
 font-size: x-large;
}

.coach{

  margin: 5% 56%  ;
  width: 30%;
  border: 3px solid rgb(255, 255, 255);
  padding: 1px;
}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}


/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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

    <img src="data:image/png;base64,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" style="float:left; width: 42%; margin-left: 10px; margin-top: 50px; margin-right: 10px;">
<div class="coach";>

 <div class="main-agileinfo" >
    <div class="agileits-top">
        <div class="coachrequestform" ></div>
        <form action="#" method="post">
        <form method="POST" action="">
    <label for="location" style=" font-size : 20px"> <strong> Choose a location:</label> <br> <br>
    <select name="location" id="location">
      <option value="nasr_city">Nasr City</option>
      <option value="maadi">Maadi</option>
      <option value="both">Both</option>
    </select> 
    <br> <br>
    <button type="submit" name="submit" style="background-color: green;
       border: none;
       color: white;
       padding: 8px 16px;
       text-decoration: none;
       margin: 4px 2px;
       cursor: pointer;">Submit</button>
  </form>


      
  </div>
    </div>
		
		<ul class="colorlib-bubbles">
			
	</div>
	<!-- //main -->

    


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