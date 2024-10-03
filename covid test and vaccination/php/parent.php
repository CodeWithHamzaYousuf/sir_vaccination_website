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
</head>
<body>

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
        <a class="navbar-brand" href="index.php"><span class="text-primary">VaccinationManagementService</a>

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

<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Are You a Parent?</h1>

      <form class="main-form" method="post" action="parent-panel.php">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="child-name" placeholder="Name of child" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="number" class="form-control" name="child-age" placeholder="Age of child" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="child-disease" placeholder="Child's disease" required>
          </div><br>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="vacc-name" placeholder="Vaccination Required">
          </div><br>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <p>Is the child's disease contagious?</p>
            <input type="radio" name="contagious" value="Yes"> Yes<br>
            <input type="radio" name="contagious" value="No"> No<br>
            <input type="radio" name="contagious" value="Not Sure"> Not Sure<br>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="parent-name" placeholder="Name of parent" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="parent-email" placeholder="Parent's Email address.." required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" style="display: flex; flex-direction: row;" data-wow-delay="300ms">
            <p>Date for Vaccination</p> <input type="date" name="vac-date" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" style="display: flex; flex-direction: row;" data-wow-delay="300ms">
            <p>Time for Vaccination</p> <input type="time" name="vac-time" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="hospital-choice" id="departement" class="custom-select" name="hospital-choice" required>
              <option value="Choose a Hospital in Your Area">Choose a Hospital in Your Area</option>
              <option value="Patel Hospital">Patel Hospital</option>
              <option value="Ashfaq Memorial Hospital">Ashfaq Memorial Hospital</option>
              <option value="Jinnah Hospital">Jinnah Hospital</option>
              <option value="Abbasi Shaheed Hospital">Abbasi Shaheed Hospital</option>
              <option value="Khaliq Denar Hospital">Khaliq Denar Hospital</option>
              <option value="Aga Khan Hospital">Aga Khan Hospital</option>
              <option value="Liaqat National Hospital">Liaqat National Hospital</option>
              <option value="Rajput Hospital">Rajput Hospital</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" name="parent-phone" placeholder="Phone Number.." required>
          </div>
          <!-- <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Any additional information you'd like to provide us" required></textarea>
          </div>
        </div> -->

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
