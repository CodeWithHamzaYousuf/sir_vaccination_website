<?php

include_once "./config/dbconnect.php";


if(isset($_POST['add_hospital'])){

   $name = $_POST['hospital-name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['hospital-email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $address = $_POST['hospital-address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $contact = $_POST['hospital-contact'];
   $contact = filter_var($contact, FILTER_SANITIZE_STRING);
   $zip = $_POST['zip'];
   $zip = filter_var($zip, FILTER_SANITIZE_STRING);



   $sql="SELECT * from listofhospital";
   $result=$conn-> query($sql);
   $num_rows = mysqli_num_rows($result); 


   

      $insert_hospital = $conn->prepare("INSERT INTO `listofhospital`(name, email, address, zip_code, contact) VALUES(?,?,?,?,?)");
      if ($insert_hospital === FALSE) {
         // There was an error preparing the statement
         echo $conn->error;
     } else {
         if ($insert_hospital->execute([$name, $email, $address, $zip, $contact]) === FALSE) {
             // There was an error executing the statement
             echo $conn->error;
         } else {
             if ($insert_hospital->affected_rows == 0) {
                 // The insertion failed
                 echo "Insertion failed";
             } else {
                 // The insertion succeeded
                 echo "Insertion succeeded";
             }
         }
     }
     
   }  

;

if(isset($_GET['delete'])){

   $delete_ID = $_GET['delete'];
   $delete_hospital = $conn->prepare("DELETE FROM `listofhospital` WHERE ID = ?");
   $delete_hospital->execute([$delete_ID]);
   header('location:list_of_hospital.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hospitals</title>
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

<section class="add-products">

   <h1 class="heading">add Hospitals details</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Hospital Name (Required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Enter Hospital Name" name="hospital-name">
         </div>
         <div class="inputBox">
            <span>Hospital Email Address (Required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Enter Official Email Address" name="hospital-email">
         </div>
         <div class="inputBox">
            <span>Hospital Address (Required)</span>
            <input type="text"  class="box"  placeholder="Enter Local Address" name="hospital-address">
         </div>
         <div class="inputBox">
            <span>Local ZIP Code (Required)</span>
            <input type="text"  class="box"  placeholder="Enter Local ZIP Code" name="zip">
         </div>
         <div class="inputBox">
            <span>Enter Contact No. (Required)</span>
            <textarea type="number" name="hospital-contact" placeholder="Enter Hospital Contact No." class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="Add Hospital Details" class="btn" name="add_hospital">
   </form>

</section>

<section class="show-products">

   <h1 class="heading">Hospitals added</h1>

   <div class="box-container">

   <?php
   
   
   $sql="SELECT * from listofhospital ";
   $result=$conn-> query($sql);
      if($result-> num_rows > 0){
         while($fetch_hospital = $result->fetch_assoc()){ 
   ?>
   <div class="box">
      <div class="hospital-name"><?= $fetch_hospital['name']; ?></div>
      <div class="hospital-email"><span><?= $fetch_hospital['email']; ?></span></div>
      <div class="hospital-address"><span><?= $fetch_hospital['address']; ?></span></div>
      <div class="zip"><span><?= $fetch_hospital['zip_code']; ?></span></div>
      <div class="hospital-contact"><span><?= $fetch_hospital['contact']; ?></span></div>
      <div class="flex-btn">
         <!--<a href="update_listofhospital.php?update=<?= $fetch_hospital['ID']; ?>" class="option-btn">update</a>-->
         <a href="list_of_hospital.php?delete=<?= $fetch_hospital['ID']; ?>" class="delete-btn" onclick="return confirm('Delete this hospital details?');">delete</a>
      </div>
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