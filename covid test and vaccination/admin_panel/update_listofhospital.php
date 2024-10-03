<?php

include_once "./config/dbconnect.php";

if(isset($_POST['update'])){

   $ID = $_POST['ID'];
   $name = $_POST['hospital-name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['hospital-email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $address = $_POST['hospital-address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $contact = $_POST['hospital-contact'];
   $contact = filter_var($contact, FILTER_SANITIZE_STRING);

   $update_hospital = $conn->prepare("UPDATE `listofhospital` SET name = ?, address = ?, location = ? WHERE ID = ?");
   $update_hospital->execute([$name, $address, $location, $ID]);

   $message[] = 'hospital updated successfully!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Hospital</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="./assets/css/admin_style.css">
</head>
<body>

<?php  include "./adminHeader.php";
 include "./sidebar.php";
  ?>

<section class="update-product">

   <h1 class="heading">update Hospital</h1>

   <?php
      $update_ID = $_GET['update'];
      $select_hospital = $conn->prepare("SELECT * FROM `listofhospital` WHERE ID = ?");
      $select_hospital->execute([$update_ID]);
     if($select_hospital-> num_rows() > 0){
         while($fetch_hospital = $select_hospital->fetch_assoc()){ 
    //  $update_ID = $_GET['update']
    //     $sql="SELECT * from listofhospital WHERE ID = ?";
  // $result=$conn-> query($sql);
    //  if($result-> num_rows > 0){
    //     while($fetch_hospital = $result->fetch_assoc()){ 
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="ID" value="<?= $fetch_hospital['ID']; ?>">
      <span>Update Hospital name</span>
      <input type="text" name="name" required class="box" maxlength="100" placeholder="Enter Hospital name" value="<?= $fetch_hospital['name']; ?>">
      <span>Update address</span>
      <input type="text" name="address" required class="box" maxlength="100" placeholder="Enter Hospital address"  value="<?= $fetch_hospital['address']; ?>">
      <span>Update location</span>
      <textarea name="location" class="box" required cols="30" rows="10"><?= $fetch_hospital['location']; ?></textarea>
      <div class="flex-btn">
         <input type="submit" name="update" class="btn" value="update">
         <a href="list_of_hospitals.php" class="option-btn">go back</a>
      </div>
   </form>
   
   <?php
         }
      }else{
         echo '<p class="empty">No Hospital found..!</p>';
      }
   ?>

</section>

<script src="../js/admin_script.js"></script>
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>