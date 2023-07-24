<?php
include 'connections/connection.php';

// Process form submission
if (isset($_POST['submit'])) {
    $username = $_POST['firstname'];
    $feedback = $_POST['lastname'];
    $score = $_POST['rating'];
    $coach_id = $_SESSION['coach_id'];

    $username = mysqli_real_escape_string($conn, $username);
    $feedback = mysqli_real_escape_string($conn, $feedback);
    $score = mysqli_real_escape_string($conn, $score);

    // Check if the username exists in the users table
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Username exists, insert data into performance table
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];

        $insertQuery = "INSERT INTO performance (user_id, feedback, score, coach_id) VALUES ('$user_id', '$feedback', '$score', '$coach_id')";
        if (mysqli_query($conn, $insertQuery)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    } else {
        echo "Username does not exist";
    }
}

// Close the database connection
mysqli_close($conn);
if (isset($_POST['treasure'])){
    echo "Your Data Has Been Submitted";
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
<style>
       .form{ max-width: 500px;
  padding: 10px;
  background-color: white;
  
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 20px;

}
 .lable, input, select{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

 }
 input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.coach{

margin: 5% 56%  ;
width: 30%;
border: 3px solid rgb(255, 255, 255);
padding: 1px;
}

</style>
    
</head>

 <!--start of header-->
 <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->
   
    
    <body>
                <img src="8.png" style="float:right; width: 42%; margin-left: 10px; margin-top: 50px; margin-right: 20px;">

        <h2 style="color: #45a049; font-family: Georgia, 'Times New Roman', Times, serif; margin-left: 35px;">Rate Your User</h2>
        
        <div class="form">
          <form  method="POST">
            <label for="fname">Your Player's name:</label>
            <input type="text" id="fname" name="firstname" placeholder="His name..">
        
            <label for="rating">Rate him over 10</label>
            <select id="rating" name="rating">
              <option value="" placeholder="Hi rate me"> </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>

            <label for="Comment">Comment</label>
            <input type="text" id="lname" name="lastname" placeholder="Detailed feedback..">

            <!-- <input type="submit" value="Submit"> -->
            <button type="submit" name="submit">submit </button>
            

          </form>
        </div>
        
        <!--start of footer-->
        <?php include('includes/footer.php'); ?>
         <!-- footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cdn-assets/js/bootstrap.bundle.min.js"></script>    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>