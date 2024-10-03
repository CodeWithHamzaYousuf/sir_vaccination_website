<?php

include './config/dbconnect.php';

session_start();

// PHP code to verify the login credentials

if (!empty($_POST)) {
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "vaccinationmanagementsystem";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query the database for the specified username and password
  $sql = "SELECT * FROM admin_login WHERE Username='$username' AND Password='$password'";
  $result = $conn->query($sql);

  // If the query returns a match, redirect to the dashboard
  if ($result->num_rows > 0) {
    header('Location: dashboard.php');
    exit;
  } else {
    // Print an error message if the login is invalid
    echo '<p class="error"> Invalid username or password </p>';
  }

  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

   <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

   <style>
      /* Style the form */
form {
  width: 500px;
  margin: 0 auto;
  text-align: center;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
  background-color: #f8f8f8;
}

/* Style the form fields */
form label {
  display: block;
  margin-bottom: 8px;
  font-size: 18px;
  font-weight: bold;
}

form input[type="text"],
form input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  font-size: 16px;
}

form input[type="submit"] {
  width: 100%;
  background-color: #4caf50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
}

form input[type="submit"]:hover {
  background-color: #45a049;
}

/* Style the error message */
.error {
  color: red;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
}

   </style>

</head>
<body>

<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
            <a href="#"><span class="mai-call text-primary"></span> 03122002974</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> VaccinationManagementService@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
            <a href="https://www.facebook.com/"><span class="mai-logo-facebook-f"></span></a>
        <a href="https://twitter.com/"><span class="mai-logo-twitter"></span></a>
        <a href="https://www.dribble.com/"><span class="mai-logo-dribbble"></span></a>
        <a href="https://www.instagram.com/"><span class="mai-logo-instagram"></span></a>
      </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php"><span class="text-primary">VaccinationManagementService</a>

      <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span> 
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>   -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../php/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/parent.php">Parent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/doctors.php">Hospitals</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="blog.php">Blogs</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="../php/contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin_panel/admin_login.php">Admin</a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
            </li> -->
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<section class="form-container">

   <!-- HTML code for the login form -->
<form method="POST" action="">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
</form> 


</section>
   
</body>
</html>