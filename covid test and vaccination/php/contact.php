<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

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
            <a href="index.php"><span class="mai-call text-primary"></span> 03122002974</a>
              <span class="divider">|</span>
              <a href="index.php"><span class="mai-mail text-primary"></span> VaccinationManagementService@gmail.com</a>
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
              <a class="nav-link" href="hospital.php">Hospital</a>
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


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/hospital-6398578_1920.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
<!-- 
  <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
  <div class="row">
    <label class="required" for="name">Your name:</label><br />
    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    <span id="name_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="email">Your email:</label><br />
    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    <span id="email_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="message">Your message:</label><br />
    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    <span id="message_validation" class="error_message"></span>
  </div>
    
    <input id="submit_button" type="submit" value="Send email" />
</form> -->
      <form class="main-form" method="POST" action="contact-panel.php">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="name" class="form-control" name="name" placeholder="Enter your name.." required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="father-name" placeholder="Enter your father name.." required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" class="form-control" name="contact" placeholder="Enter your contact no" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="email" class="form-control" name="email" placeholder=" Enter your email.." required>
          </div>
          <!-- <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Contact Number.." required> -->
            <!-- <textarea name="message" id="message" class="form-control" rows="6" placeholder="Let us know more about your hospital and what kind of vaccines and medicines you need" required></textarea> -->
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div> 
    <br>
    <br>
  </div> 
  <div>
  <!-- <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1547050040313!2d67.09257977455675!3d24.92679914260138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338caa5ac57cb%3A0x2c4b1fc512ab6bb!2sAptech%20Computer%20Education%20Gulshan-e-Iqbal%20Campus!5e0!3m2!1sen!2s!4v1671605553212!5m2!1sen!2s" width="1400px" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> -->
  

  
     
  <footer class="page-footer">
    <div class="col-sm-6 col-lg-3 py-3"></div>
    <div class="col-sm-6 col-lg-3 py-3"></div>
    <!-- <center> <h5>Contact</h5> -->
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
  <hr>

</div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>