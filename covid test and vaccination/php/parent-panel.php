<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- <meta name="copyright" content="MACode ID, https://macodeid.com/"> -->

  <title>VaccinationManagementService</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/panel.css">

</head>
<body>

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "vaccinationmanagementsystem";

// Connect to the database
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $childName = mysqli_real_escape_string($conn, $_POST['child-name']);
  $childAge = mysqli_real_escape_string($conn, $_POST['child-age']);
  $childDisease = mysqli_real_escape_string($conn, $_POST['child-disease']);
  $contagious = mysqli_real_escape_string($conn, $_POST['contagious']);
  $parentName = mysqli_real_escape_string($conn, $_POST['parent-name']);
  $parentEmail = mysqli_real_escape_string($conn, $_POST['parent-email']);
  $vaccinationDate = mysqli_real_escape_string($conn, $_POST['vac-date']);
  $vaccinationTime = mysqli_real_escape_string($conn, $_POST['vac-time']);
  $hospitalChoice = mysqli_real_escape_string($conn, $_POST['hospital-choice']);
  $parentContact = mysqli_real_escape_string($conn, $_POST['parent-phone']);
  $vaccineName = mysqli_real_escape_string($conn, $_POST['vacc-name']);

  // Insert the data into the database
  $sql = "INSERT INTO `bookingdetail` (`child_name`, `child_age`, `child_disease`, `contagious`, `vacc_name`, `parent_guardian`, `parent_email`, `parent_contact`, `hospital`, `date`, `time`) VALUES ('$childName', '$childAge', '$childDisease', '$contagious', '$vaccineName', '$parentName', '$parentEmail', '$parentContact', '$hospitalChoice', '$vaccinationDate', '$vaccinationTime')";
  $result = mysqli_query($conn, $sql);
  
  // Check if the query was successful
  if (!$result) {
      die("Query failed: " . mysqli_error($conn));
  }
}
?>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="parent.php">Parent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hospital.php">Hospitals</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="blog.php">Blogs</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
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

<div class="panel-display">
<p class="thank-you"> Thank you for registering, <?php echo $_POST["parent-name"];?></p>

<p class="details">
<p class="details"><b>Child's Name:</b> <?php echo $_POST["child-name"]?></p>
    <p class="details"><b>Child's Age:</b> <?php echo $_POST["child-age"]?></p>
    <p class="details"><b>Child's Disease:</b> <?php echo $_POST["child-disease"]?></p>
    <p class="details"><b>Vaccine Type:</b> <?php echo $_POST["vacc-name"]?></p>
    <p class="details"><b>Date of Vaccination:</b> <?php echo $_POST["vac-date"]?></p>
    <p class="details"><b>Time for Vaccination:</b> <?php echo $_POST["vac-time"]?></p>
    <p class="details"><b>Parent's No. :</b> <?php echo $_POST["parent-phone"]?></p>
    <p class="details"><b>Hospital:</b> <?php echo $_POST["child-name"]?></p>
</p>
</div>

<footer class="page-footer">
    <div class="col-sm-6 col-lg-3 py-3"></div>
    <div class="col-sm-6 col-lg-3 py-3"></div>
    <center> <h5>Contact</h5>
      <center><p class="footer-link mt-2">VaccinationManagementService Karachi</p>
      <center><a href="#" class="footer-link">03122002974</a>
    <center>  <a href="#" class="footer-link">VaccinationManagementService@gmail.com</a>

    <h5 class="mt-3">Social Media</h5>
    <div class="footer-sosmed mt-3">
      <div class="social-mini-button">
        <a href="https://www.facebook.com/"><span class="mai-logo-facebook-f"></span></a>
        <a href="https://twitter.com/"><span class="mai-logo-twitter"></span></a>
        <a href="https://www.dribble.com/"><span class="mai-logo-dribbble"></span></a>
        <a href="https://www.instagram.com/"><span class="mai-logo-instagram"></span></a>
      </div>
    </div>
  </div>
</div>
      
    </div>
  </div>

  <hr>

  <p id="copyright">Copyright &copy; 2022 <a href="https://macodeid.com/" target="_blank">Vaccination Management Service</a>. All right reserved</p>
</div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>