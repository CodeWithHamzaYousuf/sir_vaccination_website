<?php

include_once "./config/dbconnect.php";


if(isset($_POST['add_vaccreport'])){

   $child_name = $_POST['child_name'];
   $child_name = filter_var($child_name, FILTER_SANITIZE_STRING);
   $Vacc_name = $_POST['Vacc_name'];
   $Vacc_name = filter_var($Vacc_name, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);

   $sql="SELECT * from reportofvaccination ";
   $result=$conn-> query($sql);
 

   $insert_date = $conn->prepare("INSERT INTO `reportofvaccination`(child_name, Vacc_name, date) VALUES(?,?,?)");
   if ($insert_date === FALSE) {
      // There was an error preparing the statement
      echo $conn->error;
  } else {
      if ($insert_date->execute([$child_name, $Vacc_name, $date]) === FALSE) {
          // There was an error executing the statement
          echo $conn->error;
      } else {
          if ($insert_date->affected_rows == 0) {
              // The insertion failed
              echo "Insertion failed";
          } else {
              // The insertion succeeded
              echo "Insertion succeeded";
          }
      }
  }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Reports of Vaccination</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="./assets/css/admin_style.css">

</head>
<body>

<?php   include "./adminHeader.php";
 include "./sidebar.php";?>

<section class="show-products">

<section class="add-products">

   <h1 class="heading">Add Vaccination Reports</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Patient's Name (Required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Name of Patient" name="child_name">
         </div>
         <div class="inputBox">
            <span>Vaccine Injected (Required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Vaccine Used" name="Vacc_name">
         </div>
         <div class="inputBox">
            <span>Date of Vaccination (Required)</span>
            <input type="date" name="date" placeholder="Date of Vaccination" class="box" required maxlength="500" cols="30" rows="10"></input>
         </div>
      </div>
      
      <input type="submit" value="Add Hospital Details" class="btn" name="add_vaccreport">
   </form>

</section>

   <h1 class="heading">Reports of Vaccination</h1>

   <div class="box-container">

   <?php
   
   
   $sql="SELECT * from reportofvaccination ";
   $result=$conn-> query($sql);
      if($result-> num_rows > 0){
         while($fetch_vaccreport = $result->fetch_assoc()){ 
   ?>
   <div class="box">
      <div class="child_name">Pateient's Name: <span><?= $fetch_vaccreport['child_name']; ?></span></div>
      <div class="Vacc_name">Vaccine Type: <span><?= $fetch_vaccreport['Vacc_name']; ?></span></div>
      <div class="date">Date of Vaccination: <span><?= $fetch_vaccreport['date']; ?></span></div>
      <div class="flex-btn">
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">No Vaccine reports added yet..!</p>';
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