<?php

include_once "./config/dbconnect.php";


if(isset($_POST['add_bookingdetail'])){

   $child_name = $_POST['child_name'];
   $child_name = filter_var($child_name, FILTER_SANITIZE_STRING);
   $child_age = $_POST['child_age'];
   $child_age = filter_var($child_age, FILTER_SANITIZE_STRING);
   $child_disease = $_POST['child_disease'];
   $child_disease = filter_var($child_disease, FILTER_SANITIZE_STRING);
   $contagious = $_POST['contagious'];
   $contagious = filter_var($contagious, FILTER_SANITIZE_STRING);
   
   $vacc_name = $_POST['vacc_name'];
   $vacc_name = filter_var($vacc_name, FILTER_SANITIZE_STRING);
   $pgname = $_POST['parent_guardian'];
   $pgname = filter_var($pgname, FILTER_SANITIZE_STRING);
   $pgemail = $_POST['parent_email'];
   $pgemail = filter_var($pgemail, FILTER_SANITIZE_STRING);
   $pgcontact = $_POST['parent_contact'];
   $pgcontact = filter_var($pgcontact, FILTER_SANITIZE_STRING);
   $hospital = $_POST['hospital'];
   $hospital = filter_var($hospital, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);
   $vaccinationTime = $_POST['time'];
   $vaccinationTime = filter_var($vaccinationTime, FILTER_SANITIZE_STRING);



   $sql="SELECT * from bookingdetail";
   $result=$conn-> query($sql);
 

   if($result->num_Count() > 0){
      $message[] = 'hospital Name Already Exist!';
   }else{

      $insert_hospital = $conn->prepare("INSERT INTO `bookingdetail`(child_name , parent_guardian ,vacc_name ,hospital ,date, time ) VALUES(?,?,?,?,?,?)");
      $insert_hospital->execute([$child_name, $pgname, $vacc_name, $hospital, $date, $vaccinationTime ]);

   }  

};

if(isset($_GET['delete'])){

   $delete_ID = $_GET['delete'];
   $delete_hospital = $conn->prepare("DELETE FROM `bookingdetail` WHERE ID = ?");
   $delete_hospital->execute([$delete_ID]);
   header('location:bookingdetail.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bookings</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="./assets/css/admin_style.css">

</head>
<body>

<?php   include "./adminHeader.php";
 include "./sidebar.php";
?>

<section class="show-products">

   <h1 class="heading">Bookings </h1>

   <div class="box-container">

   <?php
   
      
   $sql="SELECT * from bookingdetail ";
   $result=$conn-> query($sql);
      if($result-> num_rows > 0){
         while($fetch_booking = $result->fetch_assoc()){ 
   ?>
   <div class="box">
      <div class="child_name"><b>Child Name: </b><?= $fetch_booking['child_name']; ?></div>
      <!--<div class="child_age"><b>Child Age: </b><?= $fetch_booking['child_age']; ?></div>
      <div class="child_disease"><b>Child's Disease: </b><?= $fetch_booking['child_disease']; ?></div>
      <div class="contagious"><b>Is It Contagious?: </b><?= $fetch_booking['contagious']; ?></div>-->
      <div class="vacc_name"><span><b>Vaccine Type: </b><?= $fetch_booking['vacc_name']; ?></span></div>

      <div class="parent_guardian"><span><b>Parent's Name: </b><?= $fetch_booking['parent_guardian']; ?></span></div>
      <!--<div class="parent_email"><span><b>Parent's Email: </b><?= $fetch_booking['parent_email']; ?></span></div>
      <div class="parent_contact"><span><b>Parent's No: </b><?= $fetch_booking['parent_contact']; ?></span></div>-->

      <div class="hospital"><span><b>Hospital: </b><?= $fetch_booking['hospital']; ?></span></div>
      <div class="date"><span><b>Vaccination Date: </b><?= $fetch_booking['date']; ?></span></div>
      <div class="date"><span><b>Vaccination Time: </b><?= $fetch_booking['time']; ?></span></div>




   </div>
   <?php
         }
      }else{
         echo '<p class="empty">No Hospitals Details added yet..!</p>';
      }
   ?>
   
   </div>

</section>

<script src="../js/admin_script.js"></script>
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
   </body>
   </html>