<?php

include_once "./config/dbconnect.php";


if(isset($_POST['add_vaccinedate'])){

   $Name = $_POST['name'];
   $Name = filter_var($Name, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);


   $sql="SELECT * from dateofvaccination ";
   $result=$conn-> query($sql);
 

   if($result->num_Count() > 0){
      $message[] = 'Product Name Already Exist!';
   }else{

      $insert_date = $conn->prepare("INSERT INTO `dateofvaccination`(Name, date) VALUES(?,?)");
      $insert_date->execute([$Name, $date ]);

   }  

};

if(isset($_GET['delete'])){

   $delete_ID = $_GET['delete'];
   $delete_child = $conn->prepare("DELETE FROM `dateofvaccination` WHERE ID = ?");
   $delete_child->execute([$delete_id]);
   header('location:Date_of_vaccination.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Date of Vaccinations</title>
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

   <h1 class="heading">Upcoming Vaccination date:</h1>

   <div class="box-container">

   <?php
   
   
   $sql="SELECT * from dateofvaccination ";
   $result=$conn-> query($sql);
      if($result-> num_rows > 0){
         while($fetch_date = $result->fetch_assoc()){ 
   ?>
   <div class="box">
      <div class="name"><?= $fetch_date['name']; ?></div>
      <div class="date"><span><?= $fetch_date['date']; ?></span></div>
      <div class="flex-btn">
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">No Date of vaccinations yet..!</p>';
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