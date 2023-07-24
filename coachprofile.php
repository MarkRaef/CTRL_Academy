<?php
include 'connections/connection.php';

// Check if the coach is not logged in
if (!isset($_SESSION['coach_id'])) {
    header("Location: Login.php"); // Redirect to login page
    exit();
}

// Get the coach ID from the session
$coach_id = $_SESSION['coach_id'];

// Fetch coach data from the database
$query = "SELECT * FROM coach WHERE id='$coach_id'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) != 1) {
    // Coach data not found, redirect to login page
    header("Location: Login.php");
    exit();
}

// Coach data found, assign coach data to variables
$coach = mysqli_fetch_assoc($result);
$userId = $coach['id'];
$username = $coach['username'];
$email = $coach['email'];
$age = $coach['age'];
$phone = $coach['phone'];
$image = $coach['image'];


// Fetch package data from the reservation table
$query = "SELECT package_name, user_id FROM reservation WHERE coach_id='$coach_id'";
$result = mysqli_query($conn, $query);

// Initialize an empty array to store the package data
$packageData = array();

// Check if any rows are returned
if ($result && mysqli_num_rows($result) > 0) {
    // Loop through the rows and populate the package data array
    while ($row = mysqli_fetch_assoc($result)) {
        $packageName = $row['package_name'];
        $userId = $row['user_id'];
        
        // Fetch user data based on the user ID
        $userQuery = "SELECT username FROM users WHERE id='$userId'";
        $userResult = mysqli_query($conn, $userQuery);
        
        if ($userResult && mysqli_num_rows($userResult) == 1) {
            $userData = mysqli_fetch_assoc($userResult);
            $userName = $userData['username'];
            
            // Check if the package name already exists in the array
            if (isset($packageData[$packageName])) {
                // Append the user name to the existing package name entry
                $packageData[$packageName][] = $userName;
            } else {
                // Create a new entry for the package name and user name
                $packageData[$packageName] = array($userName);
            }
        }
    }
}
 // Retrieve the images of all coaches from the coach table
$query = "SELECT image FROM coach";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $imagePath = 'image/' . $row['image'];
}
// Display coach profile information and package data
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
    /*table style*/
    table, th, td {
        border:1px solid rgba(0,0,0,0.125);
 background-clip: border-box;
}

        </style>
 <!--start of header-->
 <?php include('includes/header.php'); ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->



<div class="container">
    <div class="main-body">
    <br> <br>
         
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <!-- echo '<img src="' . $imagePath . '" alt="Coach Image">'; -->

                  <img src="image/<?php echo $image; ?>" alt="Admin" Imageclass="rounded" width="300" hight="300">
                    <div class="mt-3">
                      <h4><?php echo $username; ?></h4>
                      <p class="text-secondary mb-1">Certified Coach</p>
                      <br>
                      <button class="btn btn-outline-primary" ><a href="feedback.php" class="nav-item nav-link active">Rate Your Players </a></button>
                      <button class="btn btn-outline-primary" ><a href="coach.php" class="nav-item nav-link active">Requsest your Club </a></button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
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
                    <?php echo $age; ?>
                    </div>
                  </div>
                  <hr> 
                      <div class="row">
                        
                      </div>
                    </div>
                  </div>
                  <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"> coach </i>  dashboard</h6>
                          <div class="card-body card-dashboard table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    
                                <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <th style="width: 50%">Package Name</th>
                                <th style="width: 50%">Users</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
    // Check if $packageData is set and is an array
    if (isset($packageData) && is_array($packageData)) {
        // Loop through the package data and populate the table
        foreach ($packageData as $packageName => $userNames) {
            echo "<tr>";
            echo "<th rowspan='" . count($userNames) . "'>$packageName</th>";
            
            // Print the first user name in the row
            echo "<td>" . array_shift($userNames) . "</td>";
            echo "</tr>";
            
            // Print the remaining user names in separate rows
            foreach ($userNames as $userName) {
                echo "<tr><td>$userName</td></tr>";
            }
        }
    } else {
        // Handle the case when $packageData is not set or is not an array
        echo "<tr><td colspan='2'>No package data available.</td></tr>";
    }
    ?>
                    </table></div>
                                 
                        <div class="col-sm-6 mb-3">
                          <div class="">
                            <div class="">
                              <h6 class=""></h6>
                              
                                <div class=""></div>
                              </div>
                              
                              <div class="">
                                <div class=""></div>
                              </div>
                              
                              <div class="">
                                <div class=""></div>
                              </div>
                              
                              <div class="">
                                <div class=""></div>
                              </div>
                              
                              <div class="">
                                <div class=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    </div>
                    
                  </div> 

                  </div>
                  </div>
                    
                  </body>
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