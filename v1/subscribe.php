<?php 
require_once "../config.php";
if(!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
  

     $query = mysqli_query($con, "INSERT INTO subscribers (email) VALUES ('$email')");
     if($query)
     {
      
        echo 200;
     }
     else 
     {
      
         echo mysqli_error($con);
     }
}
?>